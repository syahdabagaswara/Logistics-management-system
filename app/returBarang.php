<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class returBarang extends Model{
	protected $table = 'return_barang';
	protected $fillable = [
		'kode','jumlah','no_nota','kd_toko','tanggal','kd_pegawai'
	];
    public $timestamps = false;
}
?>