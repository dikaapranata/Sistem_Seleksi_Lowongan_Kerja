<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/loker', [LokerController::class, 'index'])->name('loker');
Route::get('/loker/{loker:idloker}', [LokerController::class, 'show'])->name('loker.show');
Route::get('/loker/search', [LokerController::class, 'search'])->name('loker.search');
Route::get('/loker/{loker:idloker}/apply', [LokerController::class, 'apply'])->name('loker.apply')->middleware('auth');
Route::get('/loker/{loker:idloker}/like', [LokerController::class, 'like'])->name('loker.like')->middleware('auth');

Route::get('/like', [LikeController::class, 'index'])->name('like')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
