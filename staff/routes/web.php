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

//----------------------------------------------------------
/* Part of Index */

//route to get staff index page
Route::get('/', 'indexController@index');

Route::get('/management', 'indexController@index');

Route::get('/user_edit', 'indexController@user_edit');

Route::post('/configuration', 'indexController@configuration');



//----------------------------------------------------------
/* Part of Admin */

//route to get admin management page
Route::resource('/admin_management', 'StaffController');

//route to add user
Route::post('/add_user' , 'StaffController@store');

//route to delete user
Route::post('/del_user', 'StaffController@delete');

//route to search user
Route::post('/search_user', 'StaffController@staff_search');



//----------------------------------------------------------
/* Part of Student */

//route to get student info page
Route::get('/student_info', 'pagesController@student_info');

//rote to search student info
Route::post('/student_search' , 'StudentController@student_search');



//----------------------------------------------------------
/* Part of Subject */

//route to get subject suggestion page
Route::get('/suject_suggestion', 'pagesController@suject_suggestion');

//rote to search subject info
Route::post('/subject_search' , 'SubjectController@subject_search');

//route to add subject
Route::post('/subject_add' , 'SubjectController@subject_add');

//route to delete subject
Route::get('/del_subject/{subj_id}' , 'SubjectController@subject_del');




//----------------------------------------------------------
/* Other */

//route to change language
Route::get('change/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return Redirect::back();
});