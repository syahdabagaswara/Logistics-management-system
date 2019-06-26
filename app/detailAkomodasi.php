<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'detail_akomodasi';
    protected $fillable = [
        'no_detail_akomodasi', 'deskripsi', 'cash', 'bon','total'
    ];
    public $timestamps = false;
}
