<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/userEdit', function () {
    return view('userEdit');
});

Route::resource('tasks','TaskController');

Route::resource('subjects','SubjectController');

Route::post('search','SubjectController@search');

Route::get('/user', 'helloController@show');
