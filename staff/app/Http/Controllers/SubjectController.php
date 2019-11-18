<?php

namespace App\Http\Controllers;

use App\subject;
use Illuminate\Http\Request;
use DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.subject_suggesstion');
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

    public function subject_search(Request $request){
        $y=$request->get('year');
        $s=$request->get('semester');
        
        $subjects = DB::table('suggest_subject')
        ->where('year', '=', $y, 'AND', 'semester', '=', $s)->get();

        return view('staff.subject_sugg')
        ->with('y',$y)
        ->with('s',$s)
        ->with('subjects', $subjects);
    }

    public function subject_add(Request $data){
        $subject = array(
            'year' => $data->input('year'),
            'semester' => $data->input('semester'),
            'name' => $data->input('subj_name'),
            'subj_id' => $data->input('subj_id')
        );

        DB::table('suggest_subject')->insert($subject);

        $subjects = subject::all();
        $y = $subject['year'];
        $s = $subject['semester'];

        return view('staff.subject_sugg')
        ->with('y',$y)
        ->with('s',$s)
        ->with('subjects', $subjects);
    }

    public function subject_del(Request $data){
        $id = $data->input('id_key');
        $y = $data->input('year_key');
        $s = $data->input('sem_key');

        //delete data on DB
        DB::table('suggest_subject')->where('subj_id', '=', $id)->delete();

        //selext data on DB
        $subjects = DB::table('suggest_subject')
        ->where('year', '=', $y, 'AND', 'semester', '=', $s)->get();

        return view('staff.subject_sugg')
        ->with('y',$y)
        ->with('s',$s)
        ->with('subjects', $subjects);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //
    }
}
