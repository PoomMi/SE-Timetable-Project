<?php

namespace App\Http\Controllers;

use App\student;
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
    
    public function student_search(Request $request){
        //select data from DB
        $info = student::where('std_id', '=', $request->input('std_id'))->first();

        //check that Is data exist
        if($info === null){
            return view('staff.student_info')
            ->with('check', false);
        }
        else{
            $tmp_link = explode(" ", $info->facebook); //split space in facenook name
            $link = "";

            //loop to sum each split text without space 
            foreach ($tmp_link as $index) {
                $link = $link.$index;
            }

            return view('staff.student_info')
            ->with('id', $request->input('std_id'))
            ->with('info',$info)
            ->with('link', $link)
            ->with('check', true);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
