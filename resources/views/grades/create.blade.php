

@extends('layouts.layout')

@section('main')
<div class="row">
 <div class="col-xs-4 offset-sm-2">

    <div class="m-4 pt-4">
    <h1 class="display-6">grades Details</h1>




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
    <a href="{{ action('GradeController@index') }}" class="btn btn-primary">View </a>
    </div>

      <form method="post" action="{{ route('grades.store') }}">
          @csrf 

        



          <div class="form-group">
              <label for="subject_code">Subject Code:</label>
              <input type="text" class="form-control" name="subject_code"/>
          </div>
          <div class="form-group">
              <label for="subject_name">Subject Name:</label>
              <input type="text" class="form-control" name="subject_name"/>
          </div>
          <div class="form-group">
              <label for="subject_marks">Subject Marks:</label>
              <input type="number" class="form-control" name="subject_marks"/>
          </div>
          <div class="form-group">
              <label for="subject_grade">Subject Grades:</label>
              <input type="text" class="form-control" name="subject_grade"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Add grades</button>
    
      </form>
  </div>
</div>
</div>




@endsection
