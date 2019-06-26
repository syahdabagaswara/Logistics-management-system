<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stokMasuk extends Model
{
    //
    protected $table = 'stok_masuk';
    protected $fillable = [
        'jumlah', 'harga', 'tgl_masuk', 'kd_product', 'kd_pegawai', 'kd_supplier'
    ];
    public $timestamps = false;
}
