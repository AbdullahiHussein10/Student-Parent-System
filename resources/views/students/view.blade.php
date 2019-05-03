@extends('layouts.layout')

@section('main')
<div class="row">
<div class="col-sm-1">
    <h1 class="display-7">Students</h1>

    <div class="row">
    <a href ="{{ url('/home')}}" class="btn btn">Home</a>
    </div>
    <div>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Create</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Admission Number</td>
          <td>Grade</td>
          <td>Gender</td>
          <td>Date Of Birth</td>
          <td>Enrollment Date</td>
          <td>Home Address</td>
          <td>Parent ID</td>
          <td>Parent First Name</td>
          <td>Parent Last Name</td>
          <td>Parent Email</td>
          <td>Parent Phone Number</td>

          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}} {{$student->last_name}}</td>
            <td>{{$student->adm_no}}</td>
            <td>{{$student->grade}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->date_of_birth}}</td>
            <td>{{$student->enrollment_date}}</td>
            <td>{{$student->home_address}}</td>
            <td>{{$student->parent_id}}</td>
            <td>{{$student->parent_first_name}}</td>
            <td>{{$student->parent_last_name}}</td>
            <td>{{$student->parent_email}}</td>
            <td>{{$student->parent_phone_number}}</td>

            
            <td>
                <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection