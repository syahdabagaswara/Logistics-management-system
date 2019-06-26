<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $table = 'pelanggan';
    protected $fillable = [
        'nama', 'alamat', 'no_tlp'
    ];
    public $timestamps = false;
}
