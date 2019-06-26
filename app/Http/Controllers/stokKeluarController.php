<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stokKeluar;
use App\pegawai;
use App\Product;
use App\stokMasuk;
use App\Http\Requests;
use DB;

class stokKeluarController extends Controller{
	public function index(Request $request){
		$product = Product::all();
		$pegawai = Pegawai::all();
		$stokKeluar = DB::table('stok_keluar')
			->join('product','stok_keluar.kd_barang','=','product.kode')
			->join('pegawai','stok_keluar.kd_pegawai','=','pegawai.kode')
			->select('stok_keluar.kode as kode','product.nama as nama','stok_keluar.jumlah as jumlah','stok_keluar.harga as harga','stok_keluar.tgl_keluar as tanggal','pegawai.nama as namapegawai','pegawai.kode as kodepegawai','product.kode as kodebarang')->get();
			return view('inventori/stokkeluar',['data'=>$stokKeluar,'produk'=>$product,'pegawai'=>$pegawai]);
	}
	public function stokKeluarAdd(Request $request){
		$inputJumlah = $request->input('jumlah');
		$stokmasuk = stokMasuk::where('kd_product','=',$request->input('namabarang')	)->sum('jumlah');
		$stokkeluar = stokKeluar::where('kd_barang','=',$request->input('namabarang'))->sum('jumlah');
		$stokgudang = $stokmasuk - $stokkeluar;
		if($inputJumlah <= $stokgudang){
			$simpan = new stokKeluar;
			$simpan->kd_barang = $request->input('namabarang');
			$simpan->jumlah = $request->input('jumlah');
			$simpan->harga = $request->input('hargakeluar');
			$simpan->tgl_keluar = $request->input('tanggal');
			$simpan->kd_pegawai = $request->input('namapegawai');
			$simpan->save();
			return redirect(url('stokkeluar'));
		}else{
			echo "<script>
			alert ('Jumlah inputan melebihi stok yang ada! ulangi')
			history.go(-1);
			</script>";
		}
	}
	public function stokKeluarUpdate(Request $request){
		//Proses update
		$affectedRows = stokKeluar::where('kode','=',$request->input('kodekeluar'))->update([
				'kd_barang' => $request->input('namabarang'),
				'jumlah' => $request->input('jumlah'),
				'harga' => $request->input('hargakeluar'),
				'tgl_keluar' => $request->input('tanggal'),
				'kd_pegawai' => $request->input('namapegawai')
			]);
        return redirect(url('stokkeluar'));
	}
	public function stokKeluarDelete(Request $request){
		$stokKeluar = stokKeluar::where('kode','=', $request->input('kode'));
		$stokKeluar->delete();
        return redirect(url('stokkeluar'));
	}
}
?>