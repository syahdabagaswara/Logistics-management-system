<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\returBarang;
use App\Pegawai;
use App\Pelanggan;
use App\Http\Requests;
use DB;

class returBarangAdminController extends Controller{
	public function index(Request $request){
		$pelanggan = Pelanggan::all();
		$pegawai = Pegawai::all();
		$returBarang = DB::table('return_barang')
			->join('pelanggan','return_barang.kd_toko','=','pelanggan.kode')
			->join('pegawai','return_barang.kd_pegawai','=','pegawai.kode')
			->select('return_barang.kode as kode','return_barang.jumlah as jumlah','return_barang.no_nota as no_nota','pelanggan.nama as namaToko','return_barang.tanggal as tanggal','pegawai.nama as namaPegawai')->get();
			return view('inventori/returbarang',['data'=>$returBarang,'pelanggan'=>$pelanggan,'pegawai'=>$pegawai]);
	}
}
?>