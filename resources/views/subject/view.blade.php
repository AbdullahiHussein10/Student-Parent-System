@extends('layouts.layout')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">subjects</h1>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Admission Number</td>
          <td>Subject Name</td>
          <td>Subject Code</td>
          <td>Subject Teacher</td>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->first_name}} {{$subject->last_name}}</td>
            <td>{{$subject->adm_no}}</td>
            <td>{{$subject->subject_code}}</td>
            <td>{{$subject->subject_name}}</td>
            <td>{{$subject->subject_teacher}}</td>
            <td>
                <a href="{{ route('subject.edit',$subject->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('subject.destroy', $subject->id)}}" method="post">
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