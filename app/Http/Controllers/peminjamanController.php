<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Pegawai;
	use App\Peminjaman;
	use App\Http\Requests;
	use DB;

	class peminjamanController extends Controller{
		public function index(Request $request){
			$pegawai = Pegawai::all();
			$peminjaman = DB::table('peminjaman')
			->join('pegawai','peminjaman.kd_pegawai','=','pegawai.kode')
			->select('peminjaman.kode as kode','pegawai.nama as namapegawai','peminjaman.ttl_peminjaman as ttl_peminjaman','peminjaman.tanggal as tanggal')->get();
			return view('pegawai/pinjaman',['data'=>$peminjaman,'pegawai'=>$pegawai]);
		}
		public function peminjamanAdd(Request $request){
			$peminjaman = new Peminjaman;
			$peminjaman->kd_pegawai = $request->input('namapegawai');
			$peminjaman->ttl_peminjaman = $request->input('jumlah');
			$peminjaman->tanggal = $request->input('tanggal');
			$peminjaman->save();
			return redirect(url('pinjaman'));
		}
		public function peminjamanUpdate(Request $request){
			$affectedRows = Peminjaman::where('kode','=',$request->input('ubahkodepinjaman'))->update([
				'ttl_peminjaman' => $request->input('ubahjumlah'),
			]);
			return redirect(url('pinjaman'));
		}
		public function peminjamanDelete(Request $request){
			$peminjaman = Peminjaman::where('kode','=',$request->input('kode'));
			$peminjaman->delete();
			return redirect(url('pinjaman'));
		}
	}
?>