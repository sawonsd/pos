<?php

namespace App\Http\Controllers;

use App\Backend\DepositORWithdraw;
use App\Backend\Account;
use Illuminate\Http\Request;
use DB;


class DepositORWithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $depositwithdraw = DB::table('deposit_o_r_withdraws')
            ->join('accounts', 'accounts.id', 'deposit_o_r_withdraws.id')
            ->get();

        //$depositwithdraw = DB::table('deposit_o_r_withdraws')->get();
       return view('backend.depositwithdraw',compact('depositwithdraw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account=DB::table('accounts')->get();

        return view('backend.depositwithdraw-create',['account'=>$account]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {



        $validatedData = $request->validate([
            'account' => 'required',
            'deposit_withdraw' => 'required',
            'balance' => 'required'


        ]);

            $data=array();
            $data['account']=$request->account;
            $data['deposit_withdraw']=$request->deposit_withdraw;
            $data['balance']=$request->balance;



        
        
 

    
            //return response()->json($data);
            $deposit_withdraw = DB::table('deposit_o_r_withdraws')->insert($data);

            //DB::table('accounts')->where('id', $id)->update($data);

            if($deposit_withdraw){

                

                $accout = $accoun  + $request->balance;
                DB::table('accounts')->where('id', $id)->update($accout);

                $notification=array(
                'messege' =>'Successfully Student Added',
                'alert-type' =>'success',
                );
                return Redirect()->route('student.index')->with($notification);
                
            }else{
                $notification=array(
                'messege' =>'Somthing Worng',
                'alert-type' =>'error',
                );
                return Redirect()->back()->with($notification);
            }


    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Backend\DepositORWithdraw  $depositORWithdraw
     * @return \Illuminate\Http\Response
     */
    public function show(DepositORWithdraw $depositORWithdraw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Backend\DepositORWithdraw  $depositORWithdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(DepositORWithdraw $depositORWithdraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Backend\DepositORWithdraw  $depositORWithdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepositORWithdraw $depositORWithdraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Backend\DepositORWithdraw  $depositORWithdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepositORWithdraw $depositORWithdraw)
    {
        //
    }
}
