<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class loginController extends Controller
{
    //
    public function loginValidation(Request $req){
        $user = DB::select("SELECT * from login where username='".$req->input('username')."' and password = '".$req->input('password')."'");
        echo count($user);
        if(count($user) > 0){
    		$req->session()->put(['username'=>$user[0]->username,'kd_role'=>$user[0]->role,'kd_user'=>$user[0]->id, 'kd_pegawai'=>$user[0]->kd_pegawai]);
            // return redirect('login');
            // echo $req->session()->get('username');
            // if ($request->session()->has(['username','kd_role'])) {}
            echo "berhasil";
    	}else{
    		echo "fail";
    	}
    }

    public function logout(Request $request){
        $request->session()->flush();
        echo "logout";
        // return redirect('/');
    }
}
