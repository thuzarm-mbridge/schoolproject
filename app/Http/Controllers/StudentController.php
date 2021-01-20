<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

use App\School;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students=DB::table('students')
        ->join('schools','schools.id','=','students.school_id')
        ->select('students.*','schools.scname as ssname')
        ->get();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools=School::all();
        return view('student.create',compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "phone"=>'required',
            "address"=>'required',
            "age"=>'required',
            "subject"=>'required',
            "school_id"=>'required'

        ]);
        //left is migration table
        //right is name from create
        Student::create([
          "name" => request('name'),
          "email" => request('email'),
          "phone" => request('phone'),
          "address" => request('address'),
          "age"=>request('age'),
          "subject"=>request('subject'),
          "school_id"=>request('school_id')
        ]);

        return redirect()->route('student.index');

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
        $schools=School::all();
        $student = Student::find($id);
        return view('student.edit', compact('student','schools'));
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
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "phone"=>'required',
            "address"=>'required',
            "age"=>'required',
            "subject"=>'required',
            "school_id"=>'required'

        ]);

        $student = Student::find($id);
        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->address = request('address');
        $student->age = request('age');
        $student->subject = request('subject');
        $student->school_id = request('school_id');
        $student->save();
        return redirect()->route('student.index');
        
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
        return redirect()->route('student.index');
    }
}
