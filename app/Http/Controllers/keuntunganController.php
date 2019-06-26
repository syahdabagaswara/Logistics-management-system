<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class keuntunganController extends Controller
{
    //
    // SELECT pegawai.nama, pembelian_pelanggan.no_nota,penjualan.tanggal,stok_keluar.harga, 
    // pembelian_pelanggan.total_harga, (pembelian_pelanggan.total_harga-stok_keluar.harga) AS keuntungan 
    // FROM pembelian_pelanggan 
    // LEFT JOIN penjualan ON pembelian_pelanggan.no_nota = penjualan.kode 
    // LEFT JOIN pegawai ON penjualan.kd_pegawai = pegawai.kode 
    // LEFT JOIN stok_keluar ON pembelian_pelanggan.kd_barang = stok_keluar.kd_barang AND penjualan.tanggal = stok_keluar.tgl_keluar
    
    public function index(){
        $results = DB::select('SELECT penjualan.kode as no_nota, pegawai.nama as pegawai, penjualan.tanggal as tgl, 
                                (SELECT SUM(pembelian_pelanggan.total_harga-(stok_keluar.harga*pembelian_pelanggan.jumlah_barang)) 
                                FROM pembelian_pelanggan 
                                LEFT JOIN penjualan ON pembelian_pelanggan.no_nota = penjualan.kode  
                                LEFT JOIN stok_keluar ON pembelian_pelanggan.kd_barang = stok_keluar.kd_barang AND penjualan.tanggal = stok_keluar.tgl_keluar 
                                WHERE penjualan.tanggal = tgl) AS laba 
                                FROM penjualan LEFT JOIN pegawai ON penjualan.kd_pegawai = pegawai.kode GROUP BY penjualan.tanggal');
        return view('pegawai/keuntungan',['data'=>$results]);
    }
}
