@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-color:teal">
                <div class="card-header bg-primary">MENU</div>

                <div class="card-body">
                <a href="/studentdetails">Students Detail</a>
                </div>

                <div class="card-body">
                <a href="/subject">Course</a>
                </div>


                <div class="card-body">
                <a href="/studentsperfomance">Student Grades</a>
                </div>

                <div class="card-body">
                <a href="/fees">Fees</a>
                </div>

                <div class="card-body">
                <a href="/studentsattendance">Student Attendance Record</a>
                </div>

                <div class="card-body">
                <a href="/teachers">Teachers</a>
                </div>

                <div class="card-body">
                <a href="parents">Parents</a>
                </div>

                

                <div class="card-body">
                <a href="/teachers">Teacher-Connect</a>
                </div>
                    
                </div>
            </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the Admin DashBoard!
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
