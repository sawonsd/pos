<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {   
        $student=DB::table('students')->paginate(5);
        return view('backend.student',['student'=>$student]);
        //return response()->json($student);
        //->orderBy('id','desc')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:25',
            'surname' => 'required|min:3|max:25',
            'email' => 'required|unique:students|min:3|max:50',
            'phone' => 'required|unique:students|min:11|max:11',
            'address' => 'required|min:3|max:100',
            'image' => 'required|mimes:jpeg,png,jpg,pdf,|max:1024|dimensions:max_width=1500,max_height=1500',
            'class' => 'required|min:3|max:25',
            'roll' => 'required|unique:students|min:3|max:25',

        ]);

            $data=array();
            $data['name']=$request->name;
            $data['surname']=$request->surname;
            $data['email']=$request->email;
            $data['phone']=$request->phone;
            $data['address']=$request->address;
            $image=$request->file('image');
            $data['class']=$request->class;
            $data['roll']=$request->roll;

            if($image){
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/backend/uploads/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
            }
            //return response()->json($data);
            $student = DB::table('students')->insert($data);

            if($student){
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
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $student=DB::table('students')->where('id', $id)->first();
        //$student = DB::table('students')->first();
        return view('backend.show',compact('student'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    {   
        $student=DB::table('students')->where('id', $id)->first();
        return view('backend.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:25',
            'surname' => 'required|min:3|max:25',
            'email' => 'required|min:3|max:50',
            'phone' => 'required|min:9|max:11',
            'address' => 'required|min:3|max:25',
            'image' => 'mimes:jpeg,png,jpg,pdf,|max:1024|dimensions:max_width=1600,max_height=1600',
            'class' => 'min:3|max:25',
            'roll' => 'required|min:3|max:25',

        ]);

        if($validatedData){

            $data=array();
            $data['name']=$request->name;
            $data['surname']=$request->surname;
            $data['email']=$request->email;
            $data['phone']=$request->phone;
            $data['address']=$request->address;
            $image=$request->file('image');
            $data['class']=$request->class;
            $data['roll']=$request->roll;

            if($image){
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/backend/uploads/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                unlink($request->old_photo);
                DB::table('students')->where('id', $id)->update($data);

                $notification=array(
                'messege' =>'Successfully Student Update',
                'alert-type' =>'success',
                );
                return Redirect()->route('student.index')->with($notification);
         
            //return response()->json($data);   
    
                
            }else{
                DB::table('students')->where('id', $id)->update($data);
                $notification=array(
                'messege' =>'Successfully Student Update',
                'alert-type' =>'success',
                );
                return Redirect()->route('student.index')->with($notification);
            }
            }else{
                echo "not";
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function action(request $request)
    {
        if($request->ajax()){

            $queary = $request->get('queary');
            if($queary != ''){
                $data =  DB::table('students')
                         ->where('name','like','%'.$queary.'%')
                         ->get();
            }else{
                $data = DB::table('students')
                        ->orderBy('id','dese')
                        ->get();
            }
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row){
                    $output .='

                    ';
                }
            }else{
                $output ='
                    <tr>
                        <td>No data found</td>
                    </tr>
                ';
            }
        }
        
    }
}
