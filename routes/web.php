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

/*Route::group(array('prefix' =>'subjects'), function ()
{

	Route::get('create','Subjects\SubjectController@create');
	Route::get('index','Subjects\SubjectController@index');
	Route::post('','Subjects\SubjectController@store');

});*/

## ROTA DE PROFESSORES
/*Route::group(array('prefix' =>'teachers'), function ()
{

	Route::get('create','Teachers\TeacherController@create');
	Route::get('index','Teachers\TeacherController@index');
	Route::post('', 'Teachers\TeacherController@store');
    Route::get('/{id}','Teachers\TeacherController@show');



});
*/
Route::get('professor/login', function()
{
	return view ('teachers.auth');
});

Route::post('professor/login', 'Teachers\AuthController@login');

Route::get('professor', function()
{
	return view('teachers.index');
});

Route::get('professor/logout', 'Teachers\AuthController@logout');








Route::group(['middleware'=> ['auth:web_admins']], function ()
{

	Route::get('home', function ()
	{
		return view ('admin.index');
	});


	Route::get('students/create','Students\StudentController@create');
	Route::post('students','Students\StudentController@store');
	Route::get('students/index','Students\StudentController@index');
	Route::get('students/{id}','Students\StudentController@show');



	Route::get('administrador/logout', 'Admins\AuthController@logout');


	Route::get('adm/create', 'Admins\AdminController@create');

	Route::post('adm', 'Admins\AdminController@store');


	Route::get('teachers/create','Teachers\TeacherController@create');
	Route::get('teachers/index','Teachers\TeacherController@index');
	Route::post('teachers/', ['uses'=>'Teachers\TeacherController@store', 'as' => 'teacher.store']);
    Route::get('teachers/{id}','Teachers\TeacherController@show');

	Route::get('classroom/create','Classrooms\ClassroomController@create');
	Route::post('classrooms','Classrooms\ClassroomController@store');


	Route::get('subjects/create','Subjects\SubjectController@create');
	Route::get('subjects/index','Subjects\SubjectController@index');
	Route::post('subjects','Subjects\SubjectController@store');




});






# ROTA DE TURMAS
/*Route::group(array('prefix' =>'classroom'), function ()
{

	Route::get('create','Classrooms\ClassroomController@create');
	Route::post('','Classrooms\ClassroomController@store');

});*/
## ROTA DE ALUNOS

/*Route::group(array('prefix' =>'students'), function ()
{
	
	Route::get('create','Students\StudentController@create');
	Route::post('','Students\StudentController@store');
	Route::get('index','Students\StudentController@index');
	Route::get('/{id}','Students\StudentController@show');

});*/

################

Route::get('admin', function ()
{
	return view('admin.auth');
});

Route::post('admin', 'Admins\AuthController@login');



	