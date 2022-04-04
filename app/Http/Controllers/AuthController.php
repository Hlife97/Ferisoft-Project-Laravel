<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials, isset($request->keep) ? true : false)) {
            $request->session()->regenerate();
            return redirect()->route('admin.home');
        }
        return back()->withErrors([
            'email' => 'E-Posta Bulunamadı',
        ]);
    }

    protected function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}