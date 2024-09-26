<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login() {
        return view('admin.login');
    }

    function authenticate(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $user = Auth::attempt($data);

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => "Invalid Credentials!!"])->onlyInput('email');
    }

    function dashboard() {
        return view('admin.dashboard');
    }
}
