<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //
    protected $table = 'pembelian_pelanggan';
    protected $fillable = [
        'no_nota','kd_barang', 'jumlah_barang', 'harga_barang', 'total_harga'
    ];
    public $timestamps = false;
}
