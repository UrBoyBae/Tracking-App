<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) 
        {
            return redirect('home');
        }
        
        else
        {
            return view('login');
        }
    }

    public function loginaksi(Request $request)
    {
        $data = [
            'name' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) 
        {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        else
        {
            return back()->with('loginError', 'Username or password doesnt match');
        }
    }

    public function logoutaksi(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
