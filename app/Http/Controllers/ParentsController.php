<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentsController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $parents = parent::all();
        return view('parents.view',compact('parents')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('parents.initial');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $parents = new parent();

        $parents->first_name = $request->input('first_name');
        $parents->last_name = $request->input('last_name');
        $parents->email = $request->input('email');
        $parents->phone_number = $request->input('phone_number');

        $parents->save();

        return view('parents.create');
            

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function show(parent $parent)
    {
        return view('parents.view', compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\parent  $parent
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {

            $parents = parent::find($id);
            $parents->first_name =  $request->get('first_name');
            $parents->last_name = $request->get('last_name');
            $parents->email = $request->get('email');
            $parents->phone_number = $request->get('phone_number');
            $parents->gender = $request->get('gender');
            $parents->home_address = $request->get('home_address');
            $parents->date_of_birth = $request->get('date_of_birth');
            $parents->enrollment_date = $request->get('enrollment_date');
            $parents->save();
    
            return redirect('/parents')->with('success', 'parents updated!');
        }

    public function edit($id){
        $parents = parent::find($id);

        return view('parents.edit', compact('parents'));
    }
       

        





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
    $parents = parent::find($id);
    $parents->delete();
    return redirect('parents')->with('success','parent Has Been Deleted');
}
}
