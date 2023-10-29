<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Like;
use App\Models\User;
use App\Models\Loker;
use App\Models\ApplyLoker;
use App\Models\TahapanApply;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Notifications\Action;
use Illuminate\Pagination\LengthAwarePaginator;

class LokerController extends Controller
{

    // public function index(): View
    // {
    //     $lokers = Loker::whereDate('tgl_aktif', '>', now())->get();
    
    //     // Calculate the difference in days for each Loker
    //     $lokers = $lokers->map(function ($loker) {
    //         $loker->sisa_hari = now()->diffInDays($loker->tgl_aktif);
    //         return $loker;
    //     });
    
    //     // Sort Lokers by the lowest sisa hari
    //     $lokers = $lokers->sortBy('sisa_hari');
    
    //     // Paginate the sorted collection
    //     $currentPage = LengthAwarePaginator::resolveCurrentPage();
    //     $perPage = 10; // Change 10 to the number of items you want per page
    //     $currentItems = $lokers->slice(($currentPage - 1) * $perPage, $perPage);
    //     $lokers = new LengthAwarePaginator($currentItems, $lokers->count(), $perPage);
    //     $lokers->setPath(request()->url());
    
    //     return view('loker', [
    //         'lokers' => $lokers,
    //         'query' => ''
    //     ]);
    // }
    public function index(): View
{
    // Ambil semua lowongan pekerjaan
    $lokers = Loker::get();

    // Pisahkan lowongan pekerjaan yang aktif dan yang tidak aktif
    $activeLokers = $lokers->filter(function ($loker) {
        return now()->isBefore($loker->tgl_aktif);
    });
    $activeLokers = $activeLokers->sortBy(function($loker) {
        return now()->diffInDays($loker->tgl_aktif);
    });

    $inactiveLokers = $lokers->filter(function ($loker) {
        return now()->isAfter($loker->tgl_aktif);
    });

    // Gabungkan kembali dengan urutan yang benar
    $sortedLokers = $activeLokers->merge($inactiveLokers);

    // Memisahkan data ke dalam halaman
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; // Ubah ke jumlah yang diinginkan per halaman
    $currentItems = $sortedLokers->slice(($currentPage - 1) * $perPage, $perPage);
    $lokers = new LengthAwarePaginator($currentItems, $sortedLokers->count(), $perPage);
    $lokers->setPath(request()->url());

    return view('loker', [
        'lokers' => $lokers,
        'query' => ''
    ]);
}

//     public function index(): View
// {
//     $lokers = Loker::paginate(10); // Change 10 to the number of items you want per page

//     return view('loker', [
//         'lokers' => $lokers
//     ]);
// }

    
    
    /**
     * Display the specified resource.
     */
    public function show(Loker $loker): View
    {
        $isLiked = null;
        $isApplied = null;
        $isClosed = false;

        if (auth()->check()) {
            $userEmail = auth()->user()->email;
            $idloker = $loker->idloker;

            $isLiked = User::where('email', $userEmail)
                ->whereHas('likes', function ($query) use ($idloker) {
                    $query->where('loker_idloker', $idloker);
                })
                ->exists();

            $isApplied = User::where('email', $userEmail)
                ->whereHas('apply_lokers', function ($query) use ($idloker) {
                    $query->where('loker_idloker', $idloker);
                })
                ->exists();
        }

        $tgl_aktif =  Carbon::parse($loker->tgl_aktif);
        $today = Carbon::now();

        if ($today->gte($tgl_aktif)) {
            $isClosed = true;
        }

        $likeCount = Like::where('loker_idloker', $loker->idloker)->count();
        $applyCount = ApplyLoker::where('loker_idloker', $loker->idloker)->count();

        return view('detail-loker', [
            'loker' => $loker,
            'isLiked' => $isLiked,
            'isApplied' => $isApplied,
            'isClosed' => $isClosed,
            'likeCount' => $likeCount,
            'applyCount' => $applyCount,
        ]);
    }

    public function apply(Loker $loker)
    {
        if (auth()->user()->pendidikan != $loker->pendidikan) {
            return redirect()->back()->with('status', 'Pendidikan anda tidak sesuai dengan lowongan');
        }

        $lokerId = $loker->idloker;
        $userId = auth()->id();

        $apply_loker = ApplyLoker::where('user_noktp', $userId)
            ->where('loker_idloker', $lokerId)
            ->first();

        if ($apply_loker) {
            $apply_loker->delete();
            return redirect()->back();
        } else {
            $create_apply_loker = ApplyLoker::create([
                'user_noktp' => $userId,
                'loker_idloker' => $lokerId
            ]);

            TahapanApply::create([
                'idapply' => $create_apply_loker->idapply,
                'idtahapan' => 1,
                'nilai' => 1
            ]);
        }

        return redirect()->route('applied')->with('status', 'Berhasil apply lowongan!');
    }

    public function like(Loker $loker)
    {
        $userKtp = auth()->user()->noktp;

        $like = Like::where('user_noktp', $userKtp)
            ->where('loker_idloker', $loker->idloker)
            ->first();

        if ($like) {
            $like->delete();
        } else {
            Like::create([
                'user_noktp' => auth()->id(),
                'loker_idloker' => $loker->idloker,
            ]);
        }

        return redirect()->back();
    }

    public function search(Request $request): View
    {
        $query = Loker::query();

        if ($request->filled('nama')) {
            $query->where('nama', 'like', '%' . $request->nama . '%');
        }

        if ($request->filled('usia')) {
            $query->where('usia_max', '>=', $request->usia)
                ->where('usia_min', '<=', $request->usia);
        }

        if ($request->filled('gaji')) {
            $query->where('gaji_max', '>=', $request->gaji)
                ->where('gaji_min', '<=', $request->gaji);
        }

        if ($request->filled('pendidikan')) {
            $query->where('pendidikan', $request->pendidikan);
        }

        //search by tipe
        if ($request->filled('tipe')) {
            $query->where('tipe', $request->tipe);
        }

    // Calculate the difference in days for each Loker
    $lokers = $query->get();

    // Pisahkan lowongan pekerjaan yang aktif dan yang tidak aktif
    $activeLokers = $lokers->filter(function ($loker) {
        return now()->isBefore($loker->tgl_aktif);
    });
    $activeLokers = $activeLokers->sortBy(function($loker) {
        return now()->diffInDays($loker->tgl_aktif);
    });

    $inactiveLokers = $lokers->filter(function ($loker) {
        return now()->isAfter($loker->tgl_aktif);
    });

    // Gabungkan kembali dengan urutan yang benar
    $lokers = $activeLokers->merge($inactiveLokers);

    // Sort Lokers by the lowest sisa hari
    $lokers = $lokers->sortBy('sisa_hari');

    // Paginate the sorted collection
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; // Change 10 to the number of items you want per page
    $currentItems = $lokers->slice(($currentPage - 1) * $perPage, $perPage);
    $lokers = new LengthAwarePaginator($currentItems, $lokers->count(), $perPage);
    $lokers->setPath(request()->url());

    return view('loker', [
        'lokers' => $lokers,
        'query' => $request->query()
    ]);
    }
}
