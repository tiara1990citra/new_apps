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

           //cek apakah username dan password sudah benar
           $karcis =$request->only(['username','password']);
           if(Auth::guard('satpam_admin')->attempt($karcis)){
               return redirect('/dashboardAdmin');
           }
           return back()->with('pesan','username dan password tidak terdaftar');   
       }
    }



