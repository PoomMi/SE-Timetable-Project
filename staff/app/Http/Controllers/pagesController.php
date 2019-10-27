<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //controller to control staff mode route

   	function staff(){
   		return view('staff.index');
   	}

   	function admin_management(){
   		return view('staff.admin');
   	}

   	function student_info(){
   		return view('staff.student_info');
   	}		

   	function suject_suggestion(){
   		return view('staff.subject_sugg');
   	}
}
