<?php

namespace App\Http\Controllers;

use App\Student;
use App\State;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('student');
       $state_list =State::distinct()->select('State')->orderBy('State')->get();
        return view('student')->with('state_list', $state_list);
    }

    function fetch(Request $request)
    {
        
    
    $state =$request->get('state');
    $state_list = State::where('State',$state)->select('LGA')->orderBy('LGA')->get();
    //echo $state_list;
    return response()->json($state_list);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function view()
    {
        $students = Student::all();
        return view('view')->with('students', $students);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentFormRequest $request)
    {


        $destinationPath = 'passports'; // upload path
        $extension = $request->file('passportFile')->getClientOriginalExtension(); // getting image extension
        $fileName =$request->rollNum.'.'.$extension;
        $imagepath;

        $Student = new Student();
        $Student->rollnum = $request->rollNum;
        $Student->fullnames = $request->fullnames;
        $Student->email = $request->email;
        $Student->state = $request->state;
        $Student->lga = $request->lga;
        $Student->class = $request->class;
        $Student->dob = $request->dob;
        

        $imagepath = $destinationPath.'/'.$fileName;
        $Student->path = $imagepath;
        $Student->save();
      
        
        if (($request->hasFile('passportFile'))) {
            
            
           // $tempName = $request->file("file")->getClientOriginalName();
            //$fileName = uniqid("MW") . '.' . $extension; // renameing image
            $request->file('passportFile')->move($destinationPath, $fileName); // uploading file to given path
            // sending back with message
            
        }

       


        return response()->json(['success'=>'Da is successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
