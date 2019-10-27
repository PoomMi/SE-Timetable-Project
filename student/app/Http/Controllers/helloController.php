<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function show(){

        return view('user')
        ->with('fname','DCNP')
        ->with('lname','GOD')
        ->with('phoneNo','0888888888')
        ->with('fbContact','-')
        ->with('year','-')
        ->with('address','-');
    }
    
    

}
