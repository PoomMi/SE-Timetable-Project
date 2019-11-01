<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //controller to control staff mode route

   	public function index(){
         $user = DB::table('staff')->where('username', '=', 'poommich')->first();
   		return view('staff.index', compact('user', $user));
   	}

      public function user_edit(){
         $user = DB::table('staff')->where('username', '=', 'poommich')->first();
         return view('staff.user_edit', compact('user', $user));
      }

      public function configuration(Request $info){
         $check_pwd = DB::table('staff')->where('username', '=', 'poommich')->first();


         if( $check_pwd->pwd==$info->input('pwd') ){

            if( $info->input('new_pwd')==$info->input('confirm-pwd') ){
               
               if( $info->input('new_pwd')=="" ){
                  $data = array(
                     'fname' => $info->input('name'),
                     'lname' => $info->input('surname'),
                     'username' => $info->input('username')
                  );

               }
               else{
                  $data = array(
                     'fname' => $info->input('name'),
                     'lname' => $info->input('surname'),
                     'username' => $info->input('username'),
                     'pwd' => $info->input('new_pwd')
                  );
               }

               DB::table('staff')->where('username', '=', 'poommich')->update($data);

               echo "<script>alert('update successfully!');";
               echo 'window.location.href = "/";</script>';
            }
            else{
               echo "<script>alert('New password does not match!');";
               echo 'window.location.href = "/user_edit";</script>';
            }
            
         }
         else{
            echo "<script>alert('Incorrect password!');";
            echo 'window.location.href = "/user_edit";</script>';
         }

         
      }

}
