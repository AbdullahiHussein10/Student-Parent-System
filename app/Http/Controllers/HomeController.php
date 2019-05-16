<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Teacher;
use App\Parents;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $studentCount = Student::count();
        $subjectCount = Subject::count();
        $teacherCount = Teacher::count();
        $parentCount = Parents::count();
        return view('home', compact('studentCount', 'subjectCount', 'teacherCount', 'parentCount'));

}

}