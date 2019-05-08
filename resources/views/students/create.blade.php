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
              <label for="first_name">First Name:</label><br> 
              <input type="text" name="first_name"/>

              <label for="middle_name">Middle Name:</label>
              <input type="text" name="middle_name"/>
          </div>

          <div class="form-group">
          <label for="last_name">Last Name:</label><br> 
          <input type="text" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="adm_no">Admission Number:</label><br> 
              <input type="text" name="adm_no"/>
          </div>


          <div class="dropdown">
          <label for="grade">Grade:</label>
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
              <label for="home_address">Home Address:</label><br>

              <label for="city">City:</label>
              <input type="text" name="city">
              
              <label for="province">Province:</label>
              <input type="text" name="province">
          </div> 

                        
          <button type="submit" class="btn btn-primary-outline">Add student</button>
      </form>
  </div>
</div>
</div>
@endsection