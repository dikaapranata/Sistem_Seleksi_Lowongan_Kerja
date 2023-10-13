<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index(): View
    {
        // dd(auth()->user()->likes()->with('loker')->get()->pluck('lokers')->flatten());
        $lokers = Loker::whereHas('likes', function ($query) {
            $query->where('user_noktp', auth()->id());
        })->get();

        return view('like', [
            'lokers' => $lokers
        ]);
    }
}
