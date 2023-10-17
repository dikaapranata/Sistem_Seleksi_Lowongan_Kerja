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

        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'noktp' => 'required|string',
            'nama' => 'required|string',
            'password' => 'required|min:8',
            'jenis_kelamin' => 'required|boolean',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'pendidikan' => 'required|string',
            'kota' => 'required|string',
            'no_telp' => 'required|string',
            'tgl_daftar' => Carbon::today(),
        ]);

        $validatedData['password'] = Hash::make($request->password);
        $validatedData['tgl_daftar'] = Carbon::today();
        $validatedData['foto'] = $request->file('foto')->store('foto-pencaker');
        $validatedData['file_ktp'] = $request->file('file_ktp')->store('file-ktp');

        $user = User::create($validatedData);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

        // return redirect('login')->with('status', 'Berhasil daftar sebagai pelamar, silahkan login!');
    }
}
