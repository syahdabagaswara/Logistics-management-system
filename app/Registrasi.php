<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    //
    protected $table = 'login';
	protected $fillable = [
		'id','username','password','kd_pegawai','role'
	];
    public $timestamps = false;
}
