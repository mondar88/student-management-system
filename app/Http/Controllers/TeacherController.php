<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function masterview()
  {
    $teachers = Teacher::all();
    if(Auth::guard('web')->check()){
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'index']);
    }
    else{

      return view('index', [ 'teachers'=>$teachers, 'layout'=>'master']);
    
    }

  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
    $teachers = Teacher::all();
    if(Auth::guard('web')->check() && count($teachers)>=1){
      if(Auth::guard('web')->user()->Designation == 'admin'){
          return view('index', [ 'teachers'=>$teachers, 'layout'=>'register']);
      }
      else {
        return redirect('/');
      }
    }
    elseif(count($teachers)<=1){
      return view('index', [ 'teachers'=>$teachers, 'layout'=>'register']);
    }
    else {
      return redirect('/');
    }
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function signup(Request $request)
  {
      $teachers = new Teacher();
      $teachers->firstName = $request->input('firstName');
      $teachers->LastName = $request->input('LastName');
      $teachers->EmployeeID = $request->input('EmployeeID');
      $teachers->Password = $request->input('Password');
      $teachers->Designation = $request->input('Designation');
      $teachers->save();
      return redirect('/');
  }


  /**
   * show the form for login.
   *
   * @return \Illuminate\Http\Response
   */
  public function login()
  {
    $teachers = Teacher::all();
    return view('index', ['teachers'=>$teachers, 'layout'=>'login']);

  }

  /**
   * authenticate login credentials.
   *
   * @return \Illuminate\Http\Response
   */
  public function authenticate(Request $request)
  {


       $userCredentials = $request->only('EmployeeID', 'Password');
       if ($teachers=Teacher::where($userCredentials)->first()) {
            auth()->login($teachers);
            $students = Student::all();
            return view('student', ['students'=>$students, 'layout'=>'index']);
        }
        else {
            return view('index', [ 'layout'=>'master']);
        }

  }

 public function logout(Request $request)
 {
   $request->session()->flush();
   auth()->logout();
   return redirect('/');

 }

}
