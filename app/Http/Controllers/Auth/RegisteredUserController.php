<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $user = User::create([
            'email' => $request->email,
            'noktp' => $request->noktp,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kota' => $request->kota,
            'no_telp' => $request->no_telp,
            'tgl_daftar' => Carbon::today(),
            'foto' => $request->file('foto')->store('foto-pencaker'),
            'file_ktp' => $request->file('file_ktp')->store('file-ktp')
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

        // return redirect('login')->with('status', 'Berhasil daftar sebagai pelamar, silahkan login!');
    }
}
