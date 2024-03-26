<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $creds=[
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($creds)) {
            return redirect('dashboard');
        } else {
            return redirect('/login')->withErrors('Username atau Password salah')->withInput();
        }
        
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
