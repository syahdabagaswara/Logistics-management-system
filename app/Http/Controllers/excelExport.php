<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class excelExport extends Controller
{
    //
    public function excel(){
    	// Fungsi header dengan mengirimkan raw data excel
		header("Content-type: application/vnd-ms-excel");
		 
		// Mendefinisikan nama file ekspor "hasil-export.xls"
		header("Content-Disposition: attachment; filename=tutorialweb-export.xls");
		
		echo"
		<table border='1'>
		<tr>
			<th>NO.</th>
			<th>NAMA LENGKAP</th>
			<th>KELAS</th>
			<th>JURUSAN</th>
		</tr>
		
		<tr>
				<td>aa</td>
				<td>ddz</td>
				<td>dd</td>
				<td>rfrf</td>
			</tr>
		
		</table>";
    }
}
