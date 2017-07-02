<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\View\Middleware\ShareErrorsFromSession;

use App\student;
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

        return View('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'       => 'required',
            'email'      => 'required|email',
            'student_level' => 'required|numeric'
    ]);

         
            // store
            $student = new Student;
            $student->name = Input::get('name');
            $student->email = Input::get('email');
            $student->student_level = Input::get('student_level');
            $student->save();

            // redirect
            Session::flash('message', 'Successfully created a Student!');
            return Redirect::to('students');
           
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student= Student::find($id);
        return View('students.show',compact('student'));
           
    }
  
    public function edit($id)
    {         
        $student= Student::find($id);
        return View('students.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // validate

        $this->validate($request, [
            'name'       => 'required',
            'email'      => 'required|email',
            'student_level' => 'required|numeric'
    ]);
            // store
            $student =Student::find($id);  
            $student->name = Input::get('name');
            $student->email = Input::get('email');
            $student->student_level = Input::get('student_level');
            $student->save();

            // redirect
            Session::flash('message', 'updated data successfuly');
            return Redirect::to('students');
       
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        // redirect
        return Redirect::to('students');
    }
}
