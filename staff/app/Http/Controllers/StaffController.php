<?php

namespace App\Http\Controllers;

use App\staff;
use Illuminate\Http\Request;
use DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = staff::all();
        return view('staff.admin', compact('info', $info));
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
    public function store(Request $data)
    {
        $staff = array(
            'fname' => $data->input('name'),
            'lname' => $data->input('surname'),
            'username' => $data->input('uname'),
            'pwd' => $data->input('pwd'),
            'role' => $data->input('role')
        );


        DB::table('staff')->insert($staff);

        $info = staff::all();

        return view('staff.admin')
        ->with('added', true)
        ->with('info', $info);

    }

    public function delete(Request $data){
        staff::where('staff_id', '=', $data->input('key'))->delete();

        $info = staff::all();

        return view('staff.admin')
        ->with('deled', true)
        ->with('info', $info);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        //
    }
}
