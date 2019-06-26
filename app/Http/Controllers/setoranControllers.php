<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Penjualan;
use App\detailSetoran;

class setoranController extends Controller{
	public function index(Request $request){
		$penjualan = Penjualan::all();
		$detailSetoran = DB::table('detail_setoran')
		->join('penjualan','detail_setoran.no_nota_penjualan','=','penjualan.kode')
		->select('detail_setoran.no_nota_setoran as no_nota_setoran','detail_setoran.deskripsi as deskripsi','detail_setoran.cash as cash','detail_setoran.bon as bon','detail_setoran.total as total','penjualan.kode as no_nota_penjualan')->get();
		return view('pegawai/setoran',['data'=>$detailSetoran,'penjualan'=>$penjualan]);
	}
	public function setoranAdd(Request $request){
		$setoran = new setoran;
		$setoran->no_nota_setoran = $request->input('no_nota_setoran');
		$setoran->deskripsi = $request->input('deskripsi');
		$setoran->cash = $request->input('cash');
		$setoran->bon = $request->input('bon');
		$setoran->total =$request->input('total');
		$setoran->no_nota_penjualan = $request->input('no_nota_penjualan');
		$setoran->save();
	}
	public function setoranUpdate(Request $request){
		$affectedRows = setoran::where('no_nota_penjualan','=',$request->input('no_nota_penjualan'),'AND','no_nota_setoran','=',$request->input('no_nota_setoran'))->update([
			'deskripsi'=>$request->input('deskripsi'),
			'cash'=>$request->input('cash'),
			'bon'=>$request->input('bon'),
			'total'=>$request->input('total')
		]);
	}
}
?>