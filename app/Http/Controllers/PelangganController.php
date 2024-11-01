<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        // $pelanggan = Pelanggan::all();
        return view('pelanggan'); 
    }

    public function create(){
            return view('tambahpelanggan');
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'id_pelanggan' => 'required',
            'namaPelanggan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        // Simpan data ke database
        Pelanggan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'nama' => $request->namaPelanggan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        // Redirect atau respon setelah data disimpan
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
