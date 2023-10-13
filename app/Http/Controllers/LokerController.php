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
        dd($request->search);
        // $loker = Loker::
    }
}
