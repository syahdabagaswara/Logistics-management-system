<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = 'peminjaman';
    protected $fillable = [
        'kode', 'kd_pegawai', 'ttl_peminjaman', 'tanggal'
    ];
    public $timestamps = false;
}
