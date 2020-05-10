<?php

namespace App\Http\Controllers;

use App\Backend\Customer;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customers')->get();

        return view('backend.customer',compact('customer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customer-create');
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
            'name' => 'required|min:3|max:25',
            'phone' => 'required|min:3|max:25',
            'email' => 'required|unique:customers|min:3|max:50',
            'Current_Due' => 'required|numeric',
            // 'previous' => 'required|min:3|max:100',
            // 'village' => 'required|min:3|max:100',
            // 'post' => 'required|min:3|max:100',
            // 'upzila' => 'required|min:3|max:100',
            // 'zila' => 'required|min:3|max:100',
            // 'nid' => 'required|min:3|max:100',
            'image' => 'required|mimes:jpeg,png,jpg,pdf,|max:1024',


        ]);

            $data=array();
            $data['name']=$request->name;
            $data['phone']=$request->phone;
            $data['email']=$request->email;
            $data['address']=$request->address;
            $data['Current_Due']=$request->Current_Due;
            // $data['previous']=$request->previous;
            // $data['village']=$request->village;
            // $data['postcode']=$request->postcode;
            // $data['upzila']=$request->upzila;
            // $data['zila']=$request->zila;
            // $data['nid']=$request->nid;
            $image=$request->file('image');

             if($image){
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/backend/uploads/customer/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
            }


            $customer = DB::table('customers')->insert($data);
            //return response()->json($customer);

            if($customer){
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Backend\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Backend\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Backend\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Backend\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
