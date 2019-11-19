<?php

namespace App\Http\Controllers;
use DB;
use App\enrolls;
use Illuminate\Http\Request;

class EnrollsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function add(Request $request){
        $std_id = $request->input('std_id');
        $subj_id = $request->input('subj_id');
        $data = array(
            //db column            //form name
            'std_id'=> $request->input('std_id'),
            'subj_id'=> $request->input('subj_id')
        );

        enrolls::where('std_id', '=', $std_id)->insert($data);
        
        echo "<script>window.location.href='/';</script>";

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
     * @param  \App\enrolls  $enrolls
     * @return \Illuminate\Http\Response
     */
    public function show(enrolls $enrolls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\enrolls  $enrolls
     * @return \Illuminate\Http\Response
     */
    public function edit(enrolls $enrolls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\enrolls  $enrolls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrolls $enrolls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enrolls  $enrolls
     * @return \Illuminate\Http\Response
     */
    public function destroy(enrolls $enrolls)
    {
        //
    }
}
