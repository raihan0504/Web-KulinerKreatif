<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layouts.register');
    }

    public function register(Request $request)
    {
      $credential = $request->validate([
        'name'=>'required',
        'email'=> 'required',
        'password'=> 'required',
        'password_confirmation'=>'required',
      ]);

      try{
          User::create($credential);
      } catch (\Exception $e) {
        redirect('/register');
      }

      return redirect('/login');
    }


}
