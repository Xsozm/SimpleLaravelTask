<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student; // get the model
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = Student::all();
        return view('pages.showstudents')->with('students',$s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.create_student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'FirstName' => 'required',
            'LastName' => 'required',
            'EnrollmentDate' => 'required'

        ]);
        $s = new Student();
        $s->FirstName =$request->input('FirstName');
        $s->LastName = $request->input('LastName');
        $s->Enrollment_Date =    $request->input('EnrollmentDate');

        $s->save();
        return redirect('/students');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.EditStudent')->with('id',$id);
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
        $this->validate($request,[
            'FirstName' => 'required',
            'LastName' => 'required',
            'EnrollmentDate' => 'required'

        ]);
        $s =  Student::find($id);
        $s->FirstName =$request->input('FirstName');
        $s->LastName = $request->input('LastName');
        $s->Enrollment_Date =    $request->input('EnrollmentDate');

        $s->save();
        return redirect('/students');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Student::find($id);
        $s->delete();
        return redirect('/students');
    }
}
