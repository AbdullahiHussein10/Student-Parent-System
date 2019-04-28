@extends('layouts.layout')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">grades</h1>
    <div>
    <a href="{{ url('/welcome') }}" class="btn btn-primary">Home</a>
    </div>
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
                <a href="{{ route('grades.edit',$grade)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('grades.destroy', $grade)}}" method="post">
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