<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//halaman login
Route::get('/',function(){
	return view('login/index');
});
route::post('login','loginController@loginValidation');
Route::get('logout','loginController@logout');

Route::get('index',function(){
	return view('inventori/index');
});

//modul produk
Route::get('produk','productController@index');
Route::post('productAdd','productController@productAdd');
Route::post('productUpdate','productController@productUpdate');
Route::post('productDelete','productController@productDelete');

//modul stok masuk
Route::get('stokmasuk','stokmasukController@index');
Route::post('stokmasukAdd','stokmasukController@stokmasukAdd');
Route::post('stokmasukDelete','stokmasukController@stokmasukDelete');
Route::post('stokmasukUpdate','stokmasukController@stokmasukUpdate');

Route::get('stokkeluar',function(){
	return view('inventori/stokkeluar');
});
Route::get('totalstok',function(){
	return view('inventori/totalstok');
});

//modul supllier
Route::get('supplier','supplierController@index');
Route::post('supplierUpdate','supplierController@supplierUpdate');
Route::post('supplierAdd','supplierController@supplierAdd');
Route::post('supplierDelete','supplierController@supplierDelete');

Route::get('returbarang',function(){
	return view('inventori/returbarang');
});
Route::get('returpenjualan',function(){
	return view('inventori/returpenjualan');
});
Route::get('datapegawai',function(){
	return view('pegawai/datapegawai');
});
Route::get('komisi',function(){
	return view('pegawai/komisi');
});
Route::get('komisi',function(){
	return view('pegawai/komisi');
});
Route::get('detailkomisi',function(){
	return view('pegawai/detailkomisi');
});
Route::get('pinjaman',function(){
	return view('pegawai/pinjaman');
});

//modul penjualan
Route::get('penjualan','penjualanController@index');
Route::post('penjualanAdd','penjualanController@penjualanAdd');
Route::post('penjualanDelete','penjualanController@penjualanDelete');
Route::post('penjualanUpdate','penjualanController@penjualanUpdate');
Route::post('pembelianAdd','penjualanController@pembelianAdd');
Route::post('pembelianUpdate','penjualanController@pembelianUpdate');
Route::post('pembelianDelete','penjualanController@pembelianDelete');
Route::get('detailpenjualan','penjualanController@pembelianView');
Route::get('detailvalidasi','penjualanController@detailvalidasi');

//mod keuntungan
Route::get('keuntungan','keuntunganController@index');

Route::get('setoran',function(){
	return view('pegawai/setoran');
});
Route::get('detailsetoran',function(){
	return view('pegawai/detailsetoran');
});
Route::get('returpegawai',function(){
	return view('pegawai/returpegawai');
});

//modul data toko/pelanggan
Route::get('datatoko','pelangganController@index');
Route::post('pelangganAdd','pelangganController@pelangganAdd');
Route::post('pelangganDelete','pelangganController@pelangganDelete');
Route::post('pelangganUpdate','pelangganController@pelangganUpdate');

//modul pembelian pelanggan
Route::get('pembelian','pembelianController@index');
Route::get('detailpembelian','pembelianController@detail');


Route::get('returbarangpelanggan',function(){
	return view('pelanggan/returbarangpelanggan');
});

//modul pegawai
Route::get('datapegawai','pegawaiController@index');
Route::post('pegawaiAdd','pegawaiController@pegawaiAdd');
Route::post('pegawaiUpdate','pegawaiController@pegawaiUpdate');
Route::post('pegawaiDelete','pegawaiController@pegawaiDelete');

//modul stokKeluar
Route::get('stokkeluar','stokKeluarController@index');
Route::post('stokKeluarAdd','stokKeluarController@stokKeluarAdd');
Route::post('stokKeluarUpdate','stokKeluarController@stokKeluarUpdate'); 
Route::post('stokKeluarDelete','stokKeluarController@stokKeluarDelete');	

//modul returPenjualan
Route::get('returpegawai','returPegawaiController@index');
Route::post('returPegawaiAdd','returPegawaiController@returPegawaiAdd');
Route::post('returPegawaiUpdate','returPegawaiController@returPegawaiUpdate');
Route::post('returPegawaiDelete','returPegawaiController@returPegawaiDelete');

//modul returBarang
Route::get('returbarangpelanggan','returBarangController@index');
Route::post('returBarangAdd','returBarangController@returBarangAdd');
Route::post('returBarangUpdate','returBarangController@returBarangUpdate');
Route::post('returBarangDelete','returBarangController@returBarangDelete');
//export excel

//modul returBarangAdmin
Route::get('returbarang','returBarangAdminController@index');

//modul totalStok
Route::get('totalstok','totalStokController@index');

//modul peminjaman
Route::get('pinjaman','peminjamanController@index');
Route::post('peminjamanAdd','peminjamanController@peminjamanAdd');
Route::post('peminjamanUpdate','peminjamanController@peminjamanUpdate');
Route::post('peminjamanDelete','peminjamanController@peminjamanDelete');

//modul returnPenjualanAdmin
Route::get('returpenjualan','returPenjualanController@index');
Route::get('excel', 'excelExport@excel');