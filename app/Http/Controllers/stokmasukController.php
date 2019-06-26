<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stokMasuk;
use App\Product;
use App\Supplier;
use App\Http\Requests;
use DB;

class stokmasukController extends Controller
{
    //
    public function index(Request $request){
        $product = Product::all();
        $supplier = Supplier::all();
        $stokmasuk = DB::table('stok_masuk')
            ->join('product', 'stok_masuk.kd_product', '=', 'product.kode')
            ->join('supplier', 'stok_masuk.kd_supplier', '=', 'supplier.kode')
            ->select('stok_masuk.kode as kode','product.nama as nama', 'stok_masuk.jumlah as jumlah', 
            'supplier.nama as supplier','stok_masuk.harga as harga',
            'stok_masuk.tgl_masuk as tgl_masuk',
            'stok_masuk.kd_supplier as kd_supplier','stok_masuk.kd_product as kd_product')->get();
    	return view('inventori/stokmasuk', ['data'=>$stokmasuk, 'produk'=>$product, 'supplier'=>$supplier]);
    }

    public function stokmasukAdd(Request $request){ 
        $stokmasuk = new stokMasuk;

        $stokmasuk->jumlah = (int)str_replace(".","",$request->input('jumlah'));
        $stokmasuk->harga = (int)str_replace(".","",str_replace("Rp. ","",$request->input('hargabeli')));
        $stokmasuk->tgl_masuk = $request->input('tanggal');
        $stokmasuk->kd_product = $request->input('kode');
        $stokmasuk->kd_pegawai = 2;
        $stokmasuk->kd_supplier = $request->input('supplier');

        $stokmasuk->save();

        // $product = Product::where('kode', '=', $request->input('kode'))->get();
        // foreach($product as $item){
        //     $stok=$item->stok;
        // }
        // $jumlah = $request->input('jumlah') + $stok;
        // $affectedRows = Product::where('kode', '=', $request->input('kode'))->update([
        //     'stok' => $jumlah
        //     ]);

        // $insertedId = $produk->id;
        return redirect(url('stokmasuk'));
    }

    public function stokmasukDelete(Request $request){  //delete supplier
        $kode = $request->input('kode');
        // $stokmasuk = stokMasuk::where('kode', '=', $kode)->get();
        // foreach($stokmasuk as $i){
        //     $stoklama=$i->jumlah;
        //     $kodebarang=$i->kd_product;
        // }
        $stokmasuk = stokMasuk::where('kode', '=', $kode);
        $stokmasuk->delete();
        
        // $product = Product::where('kode', '=', $kodebarang)->get();
        // foreach($product as $item){
        //     $stok=$item->stok;
        // }
        // $jumlah = $stok-$stoklama;
        // // echo $jumlah;
        // $affectedRows = Product::where('kode', '=', $kodebarang)->update([
        //     'stok' => $jumlah
        //     ]);
        return redirect(url('stokmasuk'));
    }

    public function stokmasukUpdate(Request $request){   //update supplier
        // $product = Product::where('kode', '=', $request->input('ubahkode'))->get();
        // foreach($product as $item){
        //     $stok=$item->stok;
        // }
        // $jumlah = $request->input('ubahjumlah') + $stok;
        // $affectedRows = Product::where('kode', '=', $request->input('ubahkode'))->update([
        //     'stok' => $jumlah
        //     ]);

    	$affectedRows = stokMasuk::where('kode', '=', $request->input('ubahkodestokmasuk'))->update([
            'jumlah' => (int)str_replace(".","",$request->input('ubahjumlah')), 
            'harga' => (int)str_replace(".","",str_replace("Rp. ","",$request->input('ubahhargabeli'))),
            // 'tgl_masuk' => $request->input('ubahtanggal'),
            // 'kd_product' => $request->input('ubahkode'),
            // 'kd_pegawai' => $request->input('namabarang'),
            'kd_supplier' => $request->input('ubahsupplier')
            ]);
        return redirect(url('stokmasuk'));
    }
}
