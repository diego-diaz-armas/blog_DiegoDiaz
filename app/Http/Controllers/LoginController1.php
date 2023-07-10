<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController1 extends Controller
{
    public function login(Request $request)

    {

        $credentials = $request->validate([

            'email'=>['required','email','string'],

            'password'=>['required','string']

        ]);

 

        $remember = $request->filled('remember');

 

 

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            return redirect('dashboard');

        }

            throw ValidationException::withMessages([

                'email' => 'las credenciales no coinside'

            ]);

        }
}
