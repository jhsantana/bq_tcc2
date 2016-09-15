<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

	
Route::get('/subjects/create','SubjectController@create');

Route::get('/subjects/index','SubjectController@index');

Route::post('/subjects','SubjectController@store');



Route::get('/teachers/create','TeacherController@create');

//Route::get('/teachers/create','TeacherController@getGenerateEnrollment');

Route::post('/teachers','TeacherController@store');

Route::get('/teachers/index','TeacherController@index');

Route::get('/teachers/{id}','TeacherController@show');





	