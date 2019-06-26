<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class totalStokController extends Controller{
	public function index(Request $request){
		$results = DB::select('SELECT product.kode as kode,product.nama as nama, product.jenis as jenis,
			(SELECT SUM(return_penjualan.jumlah) FROM return_penjualan WHERE return_penjualan.kd_product = product.kode) as return_penjualan, 
			(SELECT SUM(stok_masuk.jumlah) FROM stok_masuk WHERE product.kode=stok_masuk.kd_product) as stok_masuk, 
			(SELECT SUM(stok_keluar.jumlah) FROM stok_keluar WHERE product.kode = stok_keluar.kd_barang) as stok_keluar, 
			(SELECT SUM(stok_masuk.jumlah-stok_keluar.jumlah) FROM stok_masuk, stok_keluar WHERE product.kode = stok_keluar.kd_barang AND product.kode = stok_masuk.kd_product) AS stok FROM product GROUP BY product.kode');
		return view('inventori/totalstok',['data'=>$results]);
	}
}
?>