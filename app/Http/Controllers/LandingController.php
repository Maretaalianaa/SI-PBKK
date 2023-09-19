<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    //TAMPILAN AWAL
    public function index()
    {
        return view('landing.index', [
            'active' => 'index',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function about()
    {
        return view('landing.about', [
            'active' => 'about',
        ]);
    }

    public function helper()
    {
        return view('landing.helper', [
            'active' => 'helper',
        ]);
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('landing.login', [
                'active' => 'login',
            ]);
        }
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()
                ->intended('/dashboard')
                ->with('success', 'Selamat Datang di Dashboard SI Perpus!');
        }

        return back()->with('loginError', 'E-mail/Password Anda Salah, Coba Lagi!');
    }
}
