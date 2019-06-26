<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class returPegawai extends Model
{
    //
    protected $table = 'return_penjualan';
    protected $fillable = [
        'kode', 'tanggal', 'jumlah', 'kd_product', 'kd_pegawai',
    ];
    public $timestamps = false;
}
