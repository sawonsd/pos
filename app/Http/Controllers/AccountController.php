<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{
    public function index(){

    	//return view('backend.account');
        $account=DB::table('accounts')->get();
        
        $accoun = DB::table('accounts')
                ->get()->SUM("balance");

        // $accoun = DB::table('accounts')
        //         ->select('balance')
        //         ->where('id',4)
        //         ->get();
                

        

        return view('backend.account',['account'=>$account],['accoun'=>$accoun]);
    }

    public function accoutncreate(){

    	return view('backend.account-create');
    }



    public function accountsave(request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:accounts|max:25',
            'balance' => 'required|max:100',


        ]);

            $data=array();
            $data['name']=$request->name;
            $data['balance']=$request->balance;
            $data['description']=$request->description;

            $account = DB::table('accounts')->insert($data);
           // return response()->json($account);
          

            if($account){
                $notification=array(
                'messege' =>'Successfully Student Added',
                'alert-type' =>'success',
                );
                return Redirect()->back()->with($notification);
                
            }else{
                $notification=array(
                'messege' =>'Somthing Worng',
                'alert-type' =>'error',
                );
                return Redirect()->back()->with($notification);
            }


    }
}
