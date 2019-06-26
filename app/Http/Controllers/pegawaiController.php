<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Pegawai;
	use App\Http\Requests;

	class pegawaiController extends Controller{
		public function index(Request $requets){
	    	$pegawai = Pegawai::all();	
	    	return view('pegawai/datapegawai', ['data'=>$pegawai]);
		}
		public function pegawaiAdd(Request $request){
			$pegawai = new Pegawai;
	        $pegawai->nama = $request->input('namapegawai');
	        $pegawai->alamat = $request->input('alamatpegawai');
	        $pegawai->persen_komisi = $request->input('persenkomisi');
	        $pegawai->no_tlp = $request->input('nomorhp');
	        $pegawai->no_ktp = $request->input('nomorktp');
	        $pegawai->save();
       		return redirect(url('datapegawai'));
		}
	    public function pegawaiUpdate(Request $request){ 
	        $affectedRows = Pegawai::where('kode', '=', $request->input('id'))->update([
	            'nama' => $request->input('namapegawai'),
	            'alamat' => $request->input('alamatpegawai'),
	            'persen_komisi' => $request->input('ubahpersenkomisi'),
	            'no_tlp' => $request->input('nomorhp'),
	            'no_ktp' => $request->input('nomorktp')
	            ]);
	        return redirect(url('datapegawai'));
	    }
	    public function pegawaiDelete(Request $request){
	        $pegawai = Pegawai::where('kode', '=',$request->input('kode'));
	        $pegawai->delete();
	        return redirect(url('datapegawai'));
	    }
	}
?>