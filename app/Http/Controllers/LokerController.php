<?php

namespace App\Http\Controllers;

use App\Models\Loker;
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
        return view('detail-loker', [
            'loker' => $loker
        ]);
    }
}
