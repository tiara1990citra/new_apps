<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }
     
    public function cekLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' =>'required',
        ]);
    }

    public function latihan(Request $request){
        return $request ->user();
    }
}
