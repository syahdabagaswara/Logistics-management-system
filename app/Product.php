<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = [
        'code','nama','merk','jenis','type'
    ];
    public $timestamps = false;
}
