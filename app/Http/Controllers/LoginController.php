<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // public function login()
    // {
    //     if (Auth::check()) 
    //     {
    //         return redirect('home');
    //     }
        
    //     else
    //     {
    //         return view('login');
    //     }
    // }

    public function loginaksi(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
    
        $user = LoginModel::where('user', $username)->first();

        if ($user){
            if ($password == $user->pass) {
                // session(['id' => $user->id, 'username' => $username, 'jk'=>$user->jk]);
                session()->put('id', $user->id);
                session()->put('username', $username);
                session()->put('jk', $user->jk);
                $request->session()->regenerate();
                $username = $request->session()->get('username');
                return redirect('/dashboard');
            }
            else{
                return back()->with('loginError', 'Username or password doesnt match' );
            }
        }
        else{
            return back()->with('loginError', 'Username or password doesnt match' );
        }
        
     }

    public function logoutaksi(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
