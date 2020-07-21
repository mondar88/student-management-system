<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $students = Student::all();
      return view('student', ['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->LastName = $request->input('LastName');
        $student->age = $request->input('age');
        $student->Speciality = $request->input('Speciality');
        $student->save();
        return redirect('/');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Student::find($id);
      $students = Student::all();
      return view('student', ['students'=>$students, 'student'=>$student, 'layout'=>'edit']);
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
        $student = Student::find($id);
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->LastName = $request->input('LastName');
        $student->age = $request->input('age');
        $student->Speciality = $request->input('Speciality');
        $student->save();
        return redirect('/');
    }


}
