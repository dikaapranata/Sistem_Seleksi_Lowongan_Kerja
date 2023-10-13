<?php

namespace App\Http\Controllers;

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
        $userEmail = auth()->user()->email;
        $idloker = $loker->idloker;

        // dd($userEmail . ' - ' . )

        $liked = User::where('email', $userEmail)
            ->whereHas('likes', function ($query) use ($idloker) {
                $query->where('loker_idloker', $idloker);
            })
            ->exists();

        dd($liked);

        return view('detail-loker', [
            'loker' => $loker
        ]);
    }

    public function apply()
    {
        if (!auth()->check()) {
            dd(' ga login dia bang');
        }
        dd(auth()->user()->nama);
    }

    public function like()
    {
        if (!auth()->check()) {
            dd(' ga login dia bang');
        }
        dd(auth()->user()->nama);
    }
}
