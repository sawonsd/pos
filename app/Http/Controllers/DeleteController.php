<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id){
    	$student=DB::table('students')->where('id', $id)->first();
        $image=$student->image;
        $delete=DB::table('students')->where('id', $id)->delete();

        if($delete){
            unlink($image);
            $notification=array(
             'messege' =>'Successfully Student Delete',
             'alert-type' =>'success',
            );
            return Redirect()->back()->with($notification);
                
            }else{
             $notification=array(
             'messege' =>'Somthing Worng',
             'alert-type' =>'success',
            );
            return Redirect()->back()->with($notification);
            }
    }
}
