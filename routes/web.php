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

	## ROTA DE MATÉRIAS
Route::get('/subjects/create','SubjectController@create');

Route::get('/subjects/index','SubjectController@index');

Route::post('/subjects','SubjectController@store');


## ROTA DE PROFESSORES


Route::get('/teachers/create','TeacherController@create');

//Route::get('/teachers/create','TeacherController@getGenerateEnrollment');

Route::post('/teachers','TeacherController@store');

Route::get('/teachers/index','TeacherController@index');

Route::get('/teachers/{id}','TeacherController@show');


# ROTA DE TURMAS

Route::get('/classroom/create','ClassroomController@create');

Route::post('/classroom','ClassroomController@store');

## ROTA DE ALUNOS

Route::get('/students/create','StudentController@create');
Route::post('/students','StudentController@store');



	