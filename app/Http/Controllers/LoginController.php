<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=> ['required'],
            'password' => ['required'],
        ]);

        if(Auth::check()){
            return 'ya estabas logeado';
        }

        if(Auth::attempt($credentials, true)){
            return Auth::user()->toJson();
        }
        return 'Algo ha fallado';
    }
}
