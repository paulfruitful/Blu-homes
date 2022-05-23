<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\register;
use App\Models\User;


class Create extends Controller
{
    public function show(){
         return view('auth.register');
    }
    public function register(register $request){
        $user=User::create($request->validated());
        auth()->login($user);
    }
}
