<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();

        $teacher->first_name = $request->input('first_name');
        $teacher->last_name = $request->input('last_name');
        $teacher->id_no = $request->input('id_no');
        $teacher->phone_number = $request->input('phone_number');
        $teacher->date_of_birth = $request->input('date_of_birth');
        $teacher->date_of_employment = $request->input('date_of_employment');
        $teacher->email = $request->input('email');

        $teacher->save();
        return redirect('/teachers')->with('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $teacher = Teacher::find($id);

        $teacher->first_name = $request->get('first_name');
        $teacher->last_name = $request->get('last_name');
        $teacher->id_no = $request->get('id_no');
        $teacher->phone_number = $request->get('phone_number');
        $teacher->date_of_birth = $request->get('date_of_birth');
        $teacher->date_of_employment = $request->get('date_of_employment');
        $teacher->email = $request->get('email');

        $teacher->save();

        return redirect('/teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect('/teachers');
    }
}
