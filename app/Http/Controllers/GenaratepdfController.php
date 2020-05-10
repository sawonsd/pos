<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;


class GenaratepdfController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }



	
    public function pdf($id){
    	$student=DB::table('students')->where('id', $id)->first();
    	$pdf = PDF::loadView('backend.invoice.pdf', compact('student'));
		return $pdf->stream('backend.invoice.pdf');
    }

}
