<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index(): View
    {
        // $news = DB::table('news')->where('is_publish', true)->whereNull('deleted_at')->orderBy('created_at')->get();
        $lokers = Loker::all();

        return view('loker', [
            'lokers' => $lokers
        ]);
    }
}
