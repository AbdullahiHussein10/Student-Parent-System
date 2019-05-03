@extends('layouts.layout')
)

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-9">Student Registration</h1>
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

    <div class="col-md-9">
    <a href ="{{ url('/home')}}" class="btn btn">Home</a>
    </div>
    <div class="col-md-3">
    <a href="{{ route('students.index') }}" class="btn btn-primary">View</a>
    </div>
    </div>
      <form method="post" action="{{ route('students.store') }}">
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
          <label for="adm_no">Grade:</label>
          <select name="grade">

                <option value="Form One">Form One</option>
                <option value="Form One">Form Two</option>
                <option value="Form Three">Form Three</option>
                <option value="Form Four">Form Four</option>
            </select>
 
            </div>
              
        
          <div class="form-group">
          <label for="adm_no">Gender:</label>
          <select name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
      </select>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date Of Birth:</label>
              <input type="date" class="form-control" name="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="enrollment_date">Enrollment Date:</label>
              <input type="date" class="form-control" name="enrollment_date"/>
          </div>   
          <div class="form-group">
              <label for="home_address">Home Address:</label>
              <input type="text" class="form-control" name="home_address"/>
          </div> 
          <div class="form-group">
              <label for="parent_id">Parentid:</label>
              <input type="number" class="form-control" name="parent_id"/>
          </div>    
          <div class="form-group">
              <label for="parent_first_name">Parent First Name:</label>
              <input type="text" class="form-control" name="parent_first_name"/>
          </div>    
          <div class="form-group">
              <label for="parent_last_name">Parent Last Name:</label>
              <input type="text" class="form-control" name="parent_last_name"/>
          </div>   
          <div class="form-group">
              <label for="parent_email">Parent Email:</label>
              <input type="text" class="form-control" name="parent_email"/>
          </div>    
          <div class="form-group">
              <label for="parent_phone_number">Parents Phone Number:</label>
              <input type="number" class="form-control" name="parent_phone_number"/>
          </div>    
                        
          <button type="submit" class="btn btn-primary-outline">Add student</button>
      </form>
  </div>
</div>
</div>
@endsection