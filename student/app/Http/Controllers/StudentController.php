<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=student::all();
        return view('user',compact('students', $students));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addUserInfo');
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
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */

    public function editForm($std_id){
                            //db            //ค่าที่รับมา(parameter)
        $info=student::where('std_id', '=', $std_id)->first();

        return view('userEdit',compact('info',$info));
    }

    public function studentEdit(Request $info){

        $std_id = $info->input('std_id');

        $data = array(
            //db column            //form name
            'fname'=> $info->input('fname'),
            'lname'=> $info->input('lname'),
            'phone_no'=> $info->input('phone_no'),
            'fb_contact'=> $info->input('fb_contact'),
            'address'=> $info->input('address')
        );


        student::where('std_id', '=', $std_id)->update($data);
        
       echo "<script>window.location.href='user';</script>";

    }

    public function edit(Student $student)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
