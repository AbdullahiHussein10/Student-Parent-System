<?php

namespace App\Http\Controllers;
use school;
use App\Subject;
use App\Student;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $subjects = Subject::all();
        return view('subject.view',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $subjects = new Subject();

        $subjects->subject_code = $request->input('subject_code');
        $subjects->subject_name = $request->input('subject_name');
        $subjects->subject_teacher = $request->input('subject_teacher');

        $subjects->save();

        echo "success";

        return view('subject.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subject.view', compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subject::find($id);

        return view('subject.edit', compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subjects = subject::find($id);
        
        $subjects->subject_code = $request->get('subject_code');
        $subjects->subject_name = $request->get('subject_name');
        $subjects->subject_teacher = $request->get('subject_teacher');
        $subjects->save();

        return redirect('subject.view')->with('success', 'subjects updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = subject::find($id);
        $subjects->delete();
        return redirect('/subject.view')->with('success');
    }

    public function search(Request $request)
{
    $search = $request->get('search');
    $subject = Subject::where('adm_no','like', '%' .$search. '%')->paginate(5);
    

		if (count ( $subject ) > 0)
			return view ( 'subject.initial' )->withDetails ( $subject )->withQuery ( $search );
		else
			return view ( 'subject.initial' )->withMessage ( 'No Details found. Try to search again !' );
	
}
}



