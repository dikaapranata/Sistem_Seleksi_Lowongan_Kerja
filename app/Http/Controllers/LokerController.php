<?php

namespace App\Http\Controllers;

use App\Models\ApplyLoker;
use App\Models\Like;
use App\Models\Loker;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class LokerController extends Controller
{
    public function index(): View
    {
        $lokers = Loker::all();

        return view('loker', [
            'lokers' => $lokers
        ]);
    }

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
        } else {
            ApplyLoker::create([
                'user_noktp' => $userId,
                'loker_idloker' => $lokerId
            ]);
        }

        return redirect()->back();
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

        $lokers = $query->get();

        return view('loker', [
            'lokers' => $lokers
        ]);
    }
}
