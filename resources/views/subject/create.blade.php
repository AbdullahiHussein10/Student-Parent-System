

@extends('layouts.layout')

@section('main')
<div class="row">
 <div class="col-xs-4 offset-sm-2">

    <div class="m-4 pt-4">
    <h1 class="display-6">Subject Details</h1>




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
    <a href="{{ action('SubjectController@index') }}" class="btn btn-primary">View </a>
    </div>

      <form method="post" action="{{ route('subject.store') }}">
          @csrf 

        

          <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="adm_no">Admission Number:</label>
              <input type="text" class="form-control" name="adm_no"/>
          </div>
          <div class="form-group">
              <label for="subject_code">Subject Code:</label>
              <input type="text" class="form-control" name="subject_code"/>
          </div>

          <div class="form-group">
              <label for="subject_name">Subject Name:</label>
              <input type="text" class="form-control" name="subject_name"/>
          </div>

          <div class="form-group">
              <label for="subject_teacher">Subject Teacher:</label>
              <input type="text" class="form-control" name="subject_teacher"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Add Subjects</button>
    
      </form>
  </div>
</div>
</div>




@endsection
