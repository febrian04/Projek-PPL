<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dokter_panggilan;
 
use App\Exports\HasilExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class HasilController extends Controller
{
 
	public function export_excel()
	{
		return Excel::download(new HasilExport, 'hasil.xlsx');
	}
}
