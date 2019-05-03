<?php

namespace App\Http\Controllers;
use school;
use App\Student;
use App\Grade;

use Illuminate\Http\Request;

class GradeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $grades = Grade::all();
        return view('grades.view',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $grades = new grade();

        $grades->subject_code = $request->input('subject_code');
        $grades->subject_name = $request->input('subject_name');

        $grades->subject_grade = $request->get('subject_grade');
        $grades->subject_marks = $request->get('subject_marks');

        $grades->save();

        echo "success";

        return view('grades.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(grade $grade)
    {
        return view('grade.view', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grades = grade::find($id);

        return view('grade.edit', compact('grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grades = grade::find($id);

        $grades->subject_code =  $request->get('subject_code');
        $grades->subject_name = $request->get('subject_name');
        $grades->subject_grade = $request->get('subject_grade');
        $grades->subject_marks = $request->get('subject_marks');

        $grades->save();

        return redirect('/grade')->with('success', 'grades updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grades = grade::find($id);
        $grades->delete();
        return redirect('/grade')->with('success');
    }

    public function search(Request $request)
{
    $search = $request->get('search1');
    $grade = grade::where('adm_no','like', '%' .$search. '%')->paginate(5);
    

		if (count ( $grade ) > 0)
			return view ( 'grade.initial2' )->withDetails ( $grade )->withQuery ( $search );
		else
			return view ( 'grade.initial2' )->withMessage ( 'No Details found. Try to search again !' );
	
}
}





