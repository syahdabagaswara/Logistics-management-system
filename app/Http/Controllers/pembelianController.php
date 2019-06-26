<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Product;
use App\Penjualan;
use App\Http\Requests;
use DB;

class pembelianController extends Controller
{
    //
    public function index(){
        $pembelian = DB::table('pembelian_pelanggan')
        ->leftJoin('penjualan', 'pembelian_pelanggan.no_nota', '=', 'penjualan.kode')
        ->leftJoin('pegawai', 'penjualan.kd_pegawai', '=', 'pegawai.kode')
        ->leftJoin('pelanggan', 'penjualan.kd_toko', '=', 'pelanggan.kode')
        ->select('pembelian_pelanggan.total_harga as total_harga','pembelian_pelanggan.no_nota as no_nota','pegawai.nama as pegawai','pelanggan.nama as toko','penjualan.tanggal as tgl')
        ->get();
        return view('pelanggan/pembelian',['pembelian'=>$pembelian]);
    }

    public function detail(Request $request){
        $results = DB::select('select kode,
            (SELECT nama FROM pegawai WHERE kode=penjualan.kd_pegawai LIMIT 1) as nama, 
            (SELECT nama from pelanggan WHERE kode=penjualan.kd_toko LIMIT 1) as toko, 
            tanggal, 
            (SELECT SUM(total_harga) FROM pembelian_pelanggan WHERE no_nota=penjualan.kode) as total 
            from penjualan where kode='.$request->input('kode').' limit 1');
        $product = Product::all();
        $penjualan = Penjualan::where('kode', '=',$request->input('kode'))->limit(1)->get();
        $pembelian = DB::select('SELECT kode, (SELECT nama FROM product WHERE kode=pembelian_pelanggan.kd_barang LIMIT 1) as nama,
        kd_barang,jumlah_barang,harga_barang,total_harga, no_nota 
        FROM pembelian_pelanggan WHERE no_nota ='.$request->input('kode'));
        return view('pelanggan/detailpembelian',['data'=>$results,'penjualan'=>$penjualan, 'pembelian'=>$pembelian, 'produk'=>$product]);
    }
}
