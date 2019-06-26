<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawai';
    protected $fillable = [
        'nama', 'alamat','persen_komisi','no_tlp','no_ktp'
    ];
    public $timestamps = false;
}
