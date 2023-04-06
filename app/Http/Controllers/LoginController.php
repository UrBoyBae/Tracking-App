<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function login() {
        if (Auth::check()){
            return back(); 
        }
        return view('login');
        
    }

    public function loginaksi(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        $user = LoginModel::where('user', $username)
            ->first();

        if ($user && $password == $user->pass) {
            Auth::login($user);
            $request->session()->regenerate();
            $request->session()->put('user', $user);
            session()->put('id', $user->id);
            session()->put('username', $username);
            session()->put('jk', $user->jk);
            return redirect()->route('dashboard');
        } else {
            return redirect('/')->with('loginError', 'Invalid username or password');
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
