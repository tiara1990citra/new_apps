<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;


// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk login admin
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'cekLogin'])->name('cekLogin');


// Route::middleware('auth:satpam_admin')->group(function(){
//     Route::get('/dashboardAdmin',function(){
//         return view('dashboardAdmin');
//     })->middleware(Admin::class);

//     Route::get('\dashboardKasir',function(){
//         return view('dashboardKasir');
        
//     });
//     Route::get('latihan',[AdminController::class,'latihan']);

// });



// Proteksi rute dengan middleware auth untuk admin
Route::middleware('auth:satpam_admin')->group(function () {
    // Dashboard Admin
    Route::get('/dashboardAdmin', function () {
        return view('dashboardAdmin');
    })->name('dashboardAdmin');

    // Halaman Kasir
    Route::get('/Kasir', function () {
        return view('Kasir');
    })->name('Kasir');
});

Route::get('/barang',function(){
    return view('barang');
});

// Route::get('/pelanggan',function(){
//     return view('pelanggan');
// });

// Route::get('/pelanggan/tambahpelanggan', [PelangganController::class, 'create'])->name('pelanggan.create');
// Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');


// Route::get('/pelanggan', [PelangganController::class, 'index']);
// Route::post('/pelanggan', [PelangganController::class, 'store']);


Route::get('/tambahpelanggan', function () {
    return view('tambahpelanggan');
});


Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/tambahpelanggan', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
