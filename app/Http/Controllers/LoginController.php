<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('layouts.login');
    }

    public function login(Request $request){
        $akun = $request ->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        if(Auth::attempt($akun)){
            $request->session()->regenerate();

            if(auth()->user()->role===1){
                return redirect('/dashboard');
            }
            return redirect('/') -> with('info','Login Succes');
        }

        return redirect('/') -> with('error','gagal');
    }

    public function logout(Request $request){
        Auth::logout();
        $request -> session()->invalidate();
        $request -> session()->regenerateToken();
        return redirect('/');

    }
}
