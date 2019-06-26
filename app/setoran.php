<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'setoran';
    protected $fillable = [
        'kode','ttl_kekurangan'
    ];
    public $timestamps = false;
}
