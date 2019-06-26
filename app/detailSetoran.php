<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'detail_setoran';
    protected $fillable = [
        'no_nota_setoran', 'deskripsi', 'cash', 'bon','total','no_nota_penjualan'
    ];
    public $timestamps = false;
}
