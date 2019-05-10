<?php

namespace App\Http\Controllers;
use school;
use App\Student;
use App\Subject;
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
        return view('students.view',compact('students')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('students.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $students = new Student();

        $students->first_name = $request->input('first_name');
        $students->last_name = $request->input('last_name');
        $students->middle_name = $request->input('middle_name');
        $students->adm_no = $request->input('adm_no');
        $students->grade = $request->input('grade');
        $students->gender = $request->input('gender');
        $students->date_of_birth = $request->input('date_of_birth');
        $students->enrollment_date = $request->input('enrollment_date');
        $students->city = $request->input('city');
        $students->province = $request->input('province');

        $students->save();

        return view('students.create');
            

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.view', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {

            $students = student::find($id);
            $students->first_name =  $request->get('first_name');
            $students->last_name = $request->get('last_name');
            $students->middle_name = $request->get('middle_name');
            $students->adm_no = $request->get('adm_no');
            $students->grade = $request->get('grade');
            $students->gender = $request->get('gender');
            $students->city = $request->get('city');
            $students->province = $request->get('province');
            $students->date_of_birth = $request->get('date_of_birth');
            $students->enrollment_date = $request->get('enrollment_date');
            $students->save();
    
            return redirect('/students')->with('success', 'students updated!');
        }

    public function edit($id){
        $students = Student::find($id);

        return view('students.edit', compact('students'));
    }
       

        





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
    $students = student::find($id);
    $students->delete();
    return redirect('students')->with('success','Student Has Been Deleted');
}

public function search(Request $request)
{
    $search = $request->get('search');
    $student = Student::where('adm_no','like', '%' .$search. '%')->paginate(5);

		if (count ( $student ) > 0)
			return view ( 'subject.create' )->withDetails ( $student )->withQuery ( $search );
		else
			return view ( 'subject.create' )->withMessage ( 'No Details found. Try to search again !' );
	
}


public function search1(Request $request)
{
    $search = $request->get('search');
    $subject = Subject::where('adm_no','like', '%' .$search. '%')->paginate(5);
    

		if (count ( $subject ) > 0)
			return view ( 'grades.initial2' )->withDetails ( $subject )->withQuery ( $search );
		else
			return view ( 'grades.initial2' )->withMessage ( 'No Details found. Try to search again !' );
	
}




    }

    