<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\returPegawai;
use App\pegawai;
use App\Product;
use App\Http\Requests;
use DB;

class returPenjualanController extends Controller{
	public function index(Request $request){
		$product = Product::all();
		$pegawai = Pegawai::all();
		$returPegawai = DB::table('return_penjualan')
			->join('product','return_penjualan.kd_product','=','product.kode')
			->join('pegawai','return_penjualan.kd_pegawai','=','pegawai.kode')
			->select('return_penjualan.kode as kode','return_penjualan.tanggal as tanggal','return_penjualan.jumlah as jumlah','product.nama as namabarang','pegawai.nama as namapegawai')->get();
			return view('inventori/returpenjualan',['data'=>$returPegawai,'produk'=>$product,'pegawai'=>$pegawai]);
	}
}
?>