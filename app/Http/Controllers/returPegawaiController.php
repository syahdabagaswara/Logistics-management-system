<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\returPegawai;
use App\pegawai;
use App\Product;
use App\Http\Requests;
use DB;

class returPegawaiController extends Controller{
	public function index(Request $request){
		$product = Product::all();
		$pegawai = Pegawai::all();
		$returPegawai = DB::table('return_penjualan')
			->join('product','return_penjualan.kd_product','=','product.kode')
			->join('pegawai','return_penjualan.kd_pegawai','=','pegawai.kode')
			->select('return_penjualan.kode as kode','return_penjualan.tanggal as tanggal','return_penjualan.jumlah as jumlah','product.nama as namabarang','pegawai.nama as namapegawai')->get();
			return view('pegawai/returpegawai',['data'=>$returPegawai,'produk'=>$product,'pegawai'=>$pegawai]);
	}
	public function returPegawaiAdd(Request $request){
		$returPegawai = new returPegawai;
		$returPegawai->kd_product = $request->input('namabarang');
		$returPegawai->kd_pegawai = $request->input('namapegawai');
		$returPegawai->tanggal = $request->input('tanggal');
		$returPegawai->jumlah = $request->input('jumlah');
		$returPegawai->save();
        return redirect(url('returpegawai'));
	}
	public function returPegawaiUpdate(Request $request){
		$affectedRows = returPegawai::where('kode','=',$request->input('ubahkodepenjualan'))->update([
			'kd_product' => $request->input('ubahnamabarang'),
			'kd_pegawai' => $request->input('ubahnamapegawai'),
			'tanggal' => $request->input('ubahtanggal'),
			'jumlah' => $request->input('ubahjumlah')
		]);
        return redirect(url('returpegawai'));
	}
	public function returPegawaiDelete(Request $request) {
		$returPegawai = returPegawai::where('kode','=',$request->input('kode'));
		$returPegawai->delete();
        return redirect(url('returpegawai'));
	}
}
?>