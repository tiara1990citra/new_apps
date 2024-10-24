<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_transaksi',
        'id_barang',
        'jumlah',
        'sub_total'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
