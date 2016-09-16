<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Teacher;

use App\Subject;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();

        return view('form_teachers')->with('subjects', $subjects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       // $subjects = Subject::find($request->id);
       //dd($request);
        $teacher = new Teacher;
       
        //$subject = $request->subjects;
        $teacher->enrollment = $request->enrollment;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = $request->password;
        
       // $teacher->subjects()->sync($request->subjects, false);

        $teacher->save();

        //$teacher -> subjects()->sync($request->subjects, false);

        //$teacher->subjects()->attach($request->subjects);

         $teacher->subjects()->sync($request->subjects, false);




        return redirect ('teachers/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('details')->with('teacher',$teacher);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getGenerateEnrollment()
    {
        // TO DO GERAR TIMESTAMPS PARA FAZER ORDEM DESC
    }
}
