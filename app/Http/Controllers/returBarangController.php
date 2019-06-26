<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\returBarang;
use App\Pegawai;
use App\Pelanggan;
use App\Http\Requests;
use DB;

class returBarangController extends Controller{
	public function index(Request $request){
		$pelanggan = Pelanggan::all();
		$pegawai = Pegawai::all();
		$returBarang = DB::table('return_barang')
			->join('pelanggan','return_barang.kd_toko','=','pelanggan.kode')
			->join('pegawai','return_barang.kd_pegawai','=','pegawai.kode')
			->select('return_barang.kode as kode','return_barang.jumlah as jumlah','return_barang.no_nota as no_nota','pelanggan.nama as namaToko','return_barang.tanggal as tanggal','pegawai.nama as namaPegawai')->get();
			return view('pelanggan/returbarangpelanggan',['data'=>$returBarang,'pelanggan'=>$pelanggan,'pegawai'=>$pegawai]);
	}
	public function returBarangAdd(Request $request){
		$returBarang = new returBarang;

		$returBarang->no_nota = $request->input('nomornota');
		$returBarang->kd_toko = $request->input('namatoko');
		$returBarang->kd_pegawai = $request->input('namapegawai');
		$returBarang->jumlah = $request->input('jumlah');
		$returBarang->tanggal = $request->input('tanggal');
		$returBarang->save();
        return redirect(url('returbarangpelanggan'));
	}
	public function returBarangUpdate(Request $request){
		$affectedRows = returBarang::where('kode','=',$request->input('ubahkodebarang'))->update([
			'no_nota' => $request->input('ubahnomornota'),
			'kd_toko' => $request->input('ubahnamatoko'),
			'kd_pegawai' => $request->input('ubahnamapegawai'),
			'jumlah' => $request->input('ubahjumlah'),
			'tanggal' => $request->input('ubahtanggal')
		]);
        return redirect(url('returbarangpelanggan'));
	}
	public function returBarangDelete(Request $request) {
		$returBarang = returBarang::where('kode','=',$request->input('kode'));
		$returBarang->delete();
        return redirect(url('returbarangpelanggan'));
	}
}
?>