<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use DB;

class productController extends Controller
{
    public function index(Request $request){
        $produk = DB::select('SELECT * , 
        (
         IF((SELECT SUM(jumlah) FROM stok_masuk WHERE stok_masuk.kd_product = product.kode) IS NULL,
           0,(SELECT SUM(jumlah) FROM stok_masuk WHERE stok_masuk.kd_product = product.kode)
           )
         -
         IF((SELECT SUM(jumlah) FROM stok_keluar WHERE stok_keluar.kd_barang = product.kode) IS NULL,
           0,(SELECT SUM(jumlah) FROM stok_keluar WHERE stok_keluar.kd_barang = product.kode)
           )
        ) as stok 
        FROM product');

    	return view('inventori/produk', ['data'=>$produk]);
    }

    public function productAdd(Request $request){  //add supplier
        $produk = new Product;
        $produk->code = $request->input('codebarang');
        $produk->nama = $request->input('namabarang');
        $produk->merk = $request->input('merkbarang');
        $produk->jenis = $request->input('jenisbarang');
        $produk->type = $request->input('typebarang');

        $produk->save();

        // $insertedId = $produk->id;
        return redirect(url('produk'));
    }

    public function productDelete(Request $request){  //delete supplier
        $produk = Product::where('kode', '=', $request->input('kode'));
        $produk->delete();
        return redirect(url('produk'));
    }

    public function productUpdate(Request $request){   //update supplier
    	$affectedRows = Product::where('kode', '=', $request->input('kodebarang'))->update([
            'code' => $request->input('codebarang'),
            'nama' => $request->input('namabarang'),
            'merk' => $request->input('merkbarang'),
            'jenis' => $request->input('jenisbarang'),
            'type' => $request->input('typebarang')
            ]);
            
        return redirect(url('produk'));
    }
}
