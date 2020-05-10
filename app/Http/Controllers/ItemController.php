<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ItemController extends Controller
{


//Category Method
    public function category(){

    	return view('backend.category');
    }




//Item Method
    public function item(){

    	return view('backend.item');
    }




//Customer Method
    public function customer(){
        $customer = DB::table('customers')->get();
        return view('backend.customer',compact('customer'));

    }


//Customer Deu Recevives
    public function DeuReceives(){


    	return view('backend.DeuReceives');
    }



}
