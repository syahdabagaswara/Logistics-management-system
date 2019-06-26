<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stokKeluar extends Model{
	protected $table = 'stok_keluar';
	protected $fillable = [
		'kd_barang','jumlah','harga','tgl_keluar','kd_pegawai'
	];
    public $timestamps = false;
}
?>