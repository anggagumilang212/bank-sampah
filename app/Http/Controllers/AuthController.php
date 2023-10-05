<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Formlogin()
    {

        return view('admin.auth.login');
    }
    public function adminlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], [
            'email.required' => 'email wajib di isi',
            'password.required' => 'password wajib di isi',
        ]);
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/jenissampah');
        }

        return redirect()->back()->with('error_message', 'Email atau Password Salah');

    }

    public function logout()
    {

        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        return redirect('/login')->with('toast_success', 'Berhasil Logout');
    }

}
