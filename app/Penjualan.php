<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'penjualan';
    protected $fillable = [
        'kode', 'kd_pegawai', 'kd_toko', 'tanggal'
    ];
    public $timestamps = false;
}
