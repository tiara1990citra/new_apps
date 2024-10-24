<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/login',function (){
//     return view('login');
// });

Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/login',[AdminController::class,'cekLogin']);

Route::get('/dashboardAdmin',function(){
    return view('dashboardAdmin');
});

Route::get('/dashboardKasir', function(){
        return view('dashboardKasir');

});
