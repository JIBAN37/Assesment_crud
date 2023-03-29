<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=DB::table('students')->get();
        return view('home',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'image'=> $request->image,
            'gender'=> $request->gender,
            'skills'=> $request->skills

        ]);
        return redirect(route('index'))->with('message','Data added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate(
            [
                 'name' => 'required|max:50',
                 'email' => 'required|max:50',
                 'image' => 'required',
                 'gender' => 'required',
                 'skills' => 'required',
            ],
             [
                 "name.required" => "Name EN is required",
                 "email.required" => "Email is required",
                 "image.required" => "Image is required",
                 "gender.required" => "Gender is required",
                 "skills.required" => "Skills is required",
       

           ]
         );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=DB::table('students')->where('id',$id)->first();
    
        return view('editform',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('students')->where('id',$id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'image'=> $request->image,
            'gender'=> $request->gender,
            'skills'=> $request->skills

        ]);
        return redirect(route('index'))->with('message','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect(route('index'))->with('message','Data Deleted');
    }
}
