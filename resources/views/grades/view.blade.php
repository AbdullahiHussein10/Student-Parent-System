@extends('layouts.layout')

    <div class="row">
    <a href ="{{ url('/home')}}" class="btn btn">Home</a>
    </div>
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-7">Grades</h1>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Subject Name</td>
          <td>Subject Code</td>
          <td>Subject Marks</td>
          <td>Subject Grade</td>

        </tr>
    </thead>
    <tbody>

        @foreach($grades as $grade)
        <tr>
            <td>{{$grade->subject_name}}</td>
            <td>{{$grade->subject_code}}</td>
            <td>{{$grade->subject_marks}}</td>
            <td>{{$grade->subject_grade}}</td>

            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection