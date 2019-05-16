@extends('layouts.layout')

<div>
    <a href="{{ action('SubjectController@index') }}" class="btn">View </a>
    </div>

@section('main')


    <div class="container">

        <div class="col-md-3 row content-justify-center">

       <h1 class="display-7">Enter Class</h1>

        <div>
            @if ($errors->any())

                <div class="alert alert-danger">
                
                <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div>
    <div class="col-md-6">
    <form action="/search" method="get">
    </div>
        <div class="form-group">
        <input type="search" name="search" class="form-control">
        <span class="form-group-btn">
        <a href="{{ url('/search')}}"class="btn btn-primary">Search</td></a>
        </span>

            
        <div class="container pt-5">
        
    @if(isset($details))
    <h2>Students</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admission Number</td>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->adm_no}}</td>
                <td>{{$student->classes}}</td>
                <td><a href="{{ url('/subject')}}" class="btn btn-primary">Add Subjects</td></a>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

