<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Penjualan;
use App\Pembelian;
use App\Product;
use App\Pegawai;
use App\Pelanggan;
use App\stokKeluar;
use App\Http\Requests;

class penjualanController extends Controller
{
    //modul index
    public function index(Request $request){
        // if ($request->session()->has(['username','kd_role'])) {
            $product = Product::all();
            $pelanggan = Pelanggan::all();
            $pegawai = Pegawai::all();
            $results = DB::select('select kode,
            (SELECT nama FROM pegawai WHERE kode=penjualan.kd_pegawai LIMIT 1) as nama, 
            (SELECT nama from pelanggan WHERE kode=penjualan.kd_toko LIMIT 1) as toko, 
            tanggal, kd_toko,
            (SELECT SUM(total_harga) FROM pembelian_pelanggan WHERE no_nota=penjualan.kode) as total 
            from penjualan');

            return view('pegawai/penjualan', ['data'=>$results, 'produk'=>$product, 'pelanggan'=>$pelanggan, 'pegawai'=>$pegawai]);
        // }
        }
    public function detailvalidasi(){
        $sk = stokKeluar::all();
        print_r(json_encode($sk));
    }

    public function penjualanAdd(Request $request){
        //Validasi stok barang yg ada di stok keluar
            $data[0][0] = "";
            $data[0][1] = "";
            $data[0][2] = "";
            $stokKeluar = stokKeluar::where('tgl_keluar', '=',$request->input('tanggal'))->get();
            foreach($stokKeluar as $key => $item){
                $data[$key][0] = $item->kd_pegawai;
                $data[$key][1] = $item->kd_barang;
                $data[$key][2] = $item->jumlah;
            }
            // echo"data masih pure </br>";
            // print_r($data);
            // echo"</br>";
            $tmp = 0;
            for($x=0; $x < count($request->input('namabarang')); $x++){
                $nama = $request->input('namabarang');
                $jumlah = $request->input('jumlahbarang');
                foreach($data as $k => $r){
                    if($r[1]==$nama[$x]){
                        $tmp = $k;
                    }
                }
                // echo $nama[$x]." ".$data[$tmp][1]." ".$jumlah[$x]." ".$data[$tmp][2];
                if($nama[$x]==$data[$tmp][1] && $jumlah[$x] <= $data[$tmp][2]){
                    $data[$tmp][2] = $data[$tmp][2] - $jumlah[$x];
                    $validasi[$x] = 1;
                }else{
                    $validasi[$x] = 0;
                }               
            }
            // print_r($validasi);
            // echo"</br>";
            // echo"sudah tidak suci </br>";
            // print_r($data);
            // echo $tmp;
        $penjualan = new Penjualan;
        $penjualan->kd_pegawai = 2;
        $penjualan->kd_toko = $request->input('namatoko');
        $penjualan->tanggal = $request->input('tanggal');
        $penjualan->save();
        $insertedId = $penjualan->id;
        for($i=0; $i < count($request->input('namabarang')); $i++){
            $nama = $request->input('namabarang');
            $jumlah = $request->input('jumlahbarang');
            $harga = $request->input('hargabarang');
            $total = $request->input('totalharga');
            if($nama[$i] != null && $validasi[$i] == 1){
                $pembelian = new Pembelian;
                $pembelian->no_nota = $insertedId;
                $pembelian->kd_barang = $nama[$i];
                $pembelian->jumlah_barang = $jumlah[$i];
                $pembelian->harga_barang = $harga[$i];
                $pembelian->total_harga = $total[$i];
                $pembelian->save();
            }
        }
        return redirect(url('penjualan'));
    }

    public function pembelianView(Request $request){
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
        return view('pegawai/detailpenjualan',['data'=>$results,'penjualan'=>$penjualan, 'pembelian'=>$pembelian, 'produk'=>$product]);
    }

    public function pembelianUpdate(Request $request){
        $affectedRows = Pembelian::where('kode', '=', $request->input('ubahkodepembelian'))->update([
            'kd_barang' => $request->input('ubahnamabarang'),
            'jumlah_barang' => $request->input('Ubahjumlahbarang'),
            'harga_barang' => $request->input('ubahhargabarang'),
            'total_harga' => $request->input('ubahtotalharga')
            ]);

        return redirect(url('detailpenjualan?kode='.$request->input('ubahnomornota')));
    }

    public function pembelianDelete(Request $request){
        $penjualan = Pembelian::where('kode', '=',$request->input('kode'));
        $penjualan->delete();

        return redirect(url('detailpenjualan?kode='.$request->input('nomornota')));
    }

    public function pembelianAdd(Request $request){
        //cek ketersedian di stok keluar
        /*
        sql 1
        $penjualan = Penjualan::where('kode', '=',$request->input('nomornota'))->first();
        echo $penjualan->tanggal;

        sql 2
        $validasi = DB::select('SELECT 

        IF((SELECT SUM(jumlah) FROM stok_keluar WHERE tgl_keluar = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').') IS NULL,
                0,(SELECT SUM(jumlah) FROM stok_keluar WHERE tgl_keluar = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').')
            )
        -
        IF((SELECT SUM(jumlah_barang) FROM pembelian_pelanggan LEFT JOIN 
        penjualan ON pembelian_pelanggan.no_nota = penjualan.kode WHERE penjualan.tanggal = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').') IS NULL,
                0,(SELECT SUM(jumlah_barang) FROM pembelian_pelanggan LEFT JOIN 
                penjualan ON pembelian_pelanggan.no_nota = penjualan.kode WHERE penjualan.tanggal = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').')
        )
         AS validasi');
        echo $validasi[0]->validasi;
        if($request->input('jumlahbarang') <= $validasi[0]->validasi){

        }
        */
        $penjualan = Penjualan::where('kode', '=',$request->input('nomornota'))->first();
        $validasi = DB::select('SELECT 

        IF((SELECT SUM(jumlah) FROM stok_keluar WHERE tgl_keluar = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').') IS NULL,
                0,(SELECT SUM(jumlah) FROM stok_keluar WHERE tgl_keluar = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').')
            )
        -
        IF((SELECT SUM(jumlah_barang) FROM pembelian_pelanggan LEFT JOIN 
        penjualan ON pembelian_pelanggan.no_nota = penjualan.kode WHERE penjualan.tanggal = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').') IS NULL,
                0,(SELECT SUM(jumlah_barang) FROM pembelian_pelanggan LEFT JOIN 
                penjualan ON pembelian_pelanggan.no_nota = penjualan.kode WHERE penjualan.tanggal = "'.$penjualan->tanggal.'" AND kd_barang = '.$request->input('namabarang').')
        )
         AS validasi'); 
        if($request->input('jumlahbarang') <= $validasi[0]->validasi){
            $pembelian = new Pembelian;
            $pembelian->no_nota = $request->input('nomornota');
            $pembelian->kd_barang = $request->input('namabarang');
            $pembelian->jumlah_barang = $request->input('jumlahbarang');
            $pembelian->harga_barang = $request->input('hargabarang');
            $pembelian->total_harga = $request->input('totalharga');
            $pembelian->save();
        }else{
            // echo"ga bisa";
        }
        return redirect(url('detailpenjualan?kode='.$request->input('nomornota')));
    }

    public function penjualanUpdate(Request $request){ 
        $affectedRows = Penjualan::where('kode', '=', $request->input('ubahnomornota'))->update([
            'kd_toko' => $request->input('ubahnamatoko'),
            'tanggal' => $request->input('ubahtanggal')
            ]);
        return redirect(url('penjualan'));
    }

    public function penjualanDelete(Request $request){
        $penjualan = Penjualan::where('kode', '=',$request->input('kode'));
        $penjualan->delete();
        return redirect(url('penjualan'));
    }
}