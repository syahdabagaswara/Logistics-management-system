<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplier';
    protected $fillable = [
        'nama', 'alamat', 'no_tlp',
    ];
    public $timestamps = false;
}
