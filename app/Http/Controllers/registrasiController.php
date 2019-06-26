<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi;
use App\Http\Requests;

class registrasiController extends Controller
{
    public function registrationAdd(Request $request){
        $registrasi = new Registrasi;

        $registrasi->username = $request->input('namabarang');
        $registrasi->password = $request->input('jenisbarang');
        $registrasi->kd_pegawai = $request->input('jenisbarang');
        $registrasi->role = $request->input('jenisbarang');

        $registrasi->save();

        // $insertedId = $produk->id;
        return redirect(url('produk'));
    }     

    public function registrationDelete(Request $request){  //delete supplier
        $registrasi = Registrasi::where('kode', '=', $request->input('kode'));
        $registrasi->delete();
        return redirect(url('produk'));
    }

    public function registrationUpdate(Request $request){   //update supplier
    	$affectedRows = Registrasi::where('id', '=', $request->input('kodebarang'))->update([
            'username' => $request->input('namabarang'), 
            'password' => $request->input('jenisbarang')
            ]);
            
        return redirect(url('produk'));
    }
}
