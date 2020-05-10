<?php

namespace App\Http\Controllers;

use App\Backend\Shopsetting;
use Illuminate\Http\Request;

class ShopsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "shop Setting";
        return view('backend.shopsetting.shopsetting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Backend\Shopsetting  $shopsetting
     * @return \Illuminate\Http\Response
     */
    public function show(Shopsetting $shopsetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Backend\Shopsetting  $shopsetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopsetting $shopsetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Backend\Shopsetting  $shopsetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopsetting $shopsetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Backend\Shopsetting  $shopsetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopsetting $shopsetting)
    {
        //
    }
}
