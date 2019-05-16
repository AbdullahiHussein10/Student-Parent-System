@extends('layouts.layout')

<div class="container">
<div class="row justify-content-end">
<a href = "{{url('/home')}}">Home</a>
<div class="row justify-content-start">
<a href="{{url('/view')}}">View</a>
</div>

</div>



    <div class="row justify-content-center">
    <div class="col-md-3">
    <p><strong>STUDENT REGISTRATION</strong></p>
      <form method="post" action="{{ route('students.store') }}">
          @csrf
        


          <div class="form-group">
              <label for="first_name">First Name:</label>
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
          <label for="classes">class:</label>
          <select name="classes">
                
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

              <label for="city">City:</label><br>
              <input type="text" name="city">
              
              <label for="province">Province:</label>
              <input type="text" name="province">
          </div> 

                        
          <button type="submit" class="btn btn-primary">Add student</button>
      </form>
  </div>
</div>
</div>