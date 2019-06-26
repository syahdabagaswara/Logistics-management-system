<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\Http\Requests;

class pelangganController extends Controller
{
    //
    public function index(Request $requets){
        $pelanggan = Pelanggan::all();	
        return view('pelanggan/datatoko', ['data'=>$pelanggan]);
    }
    public function pelangganAdd(Request $request){
        $pelanggan = new Pelanggan;
        $pelanggan->nama = $request->input('namatoko');
        $pelanggan->alamat = $request->input('alamattoko');
        $pelanggan->no_tlp = $request->input('nomor');
        $pelanggan->save();
        return redirect(url('datatoko'));
    }
    public function pelangganUpdate(Request $request){ 
        $affectedRows = Pelanggan::where('kode', '=', $request->input('ubahkodeToko'))->update([
            'nama' => $request->input('ubahnamatoko'),
            'alamat' => $request->input('ubahalamattoko'),
            'no_tlp' => $request->input('ubahnomor')
            ]);
        return redirect(url('datatoko'));
    }
    public function pelangganDelete(Request $request){
        $pelanggan = Pelanggan::where('kode', '=',$request->input('kode'));
        $pelanggan->delete();
        return redirect(url('datatoko'));
    }
}
