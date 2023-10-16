<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplyLokerController extends Controller
{
    public function index(): View
    {
        $lokers = DB::table('apply_lokers')
            ->join('tahapan_applies', 'tahapan_applies.idapply', '=', 'apply_lokers.idapply')
            ->join('tahapans', 'tahapans.idtahapan', '=', 'tahapan_applies.idtahapan')
            ->join('lokers', 'lokers.idloker', '=', 'apply_lokers.loker_idloker')
            ->where('apply_lokers.user_noktp', auth()->id())
            ->get();

        return view('applied', [
            'lokers' => $lokers
        ]);
    }
}
