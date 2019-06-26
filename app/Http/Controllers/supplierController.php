<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Supplier;

class supplierController extends Controller
{
    public function index(Request $request){
        $suppliers = Supplier::all();

    	return view('inventori/supplier', ['data'=>$suppliers]);
    }

    /*
    public function create(){
        echo "string";
    }

    public function store(Request $request){
        echo "string";
    }

    public function update(Request $request, $id){
        echo $id;
        $request = $request->all();
        return $request;
    }

    public function edit($id){
        return $id;
    }

    public function destroy($id){
        return "des".$id;
    }

    public function show($id){
        echo "<a href='".route('supplier.destroy',$id)."'>dd</a>";
        return "show".$id;
    }
    */
    
    public function supplierAdd(Request $request){   //update supplier
        $supplier = new Supplier;

        $supplier->nama = $request->input('namasupplier');
        $supplier->alamat = $request->input('alamatsupplier');
        $supplier->no_tlp = $request->input('nomor');

        $supplier->save();

        // $insertedId = $supplier->id;
        return redirect(url('supplier'));
    }   

    public function supplierUpdate(Request $request){  //update supplier
        	
        $affectedRows = Supplier::where('kode', '=', $request->input('ubahkodesupplier'))->update([
            'nama' => $request->input('namasupplier'), 
            'alamat' => $request->input('alamatsupplier'), 
            'no_tlp' => $request->input('nomor')
            ]);
        
        // print_r($request->all());
        return redirect(url('supplier'));
    }

    public function supplierDelete(Request $request){  //delete supplier
        $supplier = Supplier::where('kode', '=',$request->input('kode'));
        $supplier->delete();
        return redirect(url('supplier'));
    }

}
