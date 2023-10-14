<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Loker;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
        $liked = null;

        if (auth()->check()){
            $userEmail = auth()->user()->email;
            $idloker = $loker->idloker;

            $liked = User::where('email', $userEmail)
                ->whereHas('likes', function ($query) use ($idloker) {
                    $query->where('loker_idloker', $idloker);
                })
                ->exists();
        }

        return view('detail-loker', [
            'loker' => $loker,
            'liked' => $liked
        ]);
    }

    public function apply()
    {
        if (!auth()->check()) {
            dd(' ga login dia bang');
        }
        dd(auth()->user()->nama);
    }

    public function like(Loker $loker)
    {
        $userKtp = auth()->user()->noktp;

        $like = Like::where('user_noktp', $userKtp)
                    ->where('loker_idloker', $loker->idloker)
                    ->first();

        if ($like) {
            $like->delete();
        }
        else {
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

        if ($request->has('nama')){
            $query->where('nama', 'like', '%' . $request->nama . '%');
        }

        if ($request->has('usia')){
            $query->where('usia_max', '>=' , $request->usia)
                ->where('usia_min', '<=' , $request->usia);
        }

        if ($request->has('gaji')){
            $query->where('gaji_max', '>=' , $request->gaji)
                ->where('gaji_min', '<=' , $request->gaji);
        }

        $lokers = $query->get();

        return view('loker', [
            'lokers' => $lokers
        ]);
    }
}
