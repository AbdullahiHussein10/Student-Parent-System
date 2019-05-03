@extends('layouts.layout')


@section('main')
<div class="row">
    <div class="col-sm-5 col-sm-2">
        <h1 class="text-muted, display=6">Update a student</h1>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $students->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">



            <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>


            <div class="form-group">
                <label for="adm_no">adm_no:</label>
                <input type="text" class="form-control" name="adm_no" value={{ $students->adm_no }} />
            </div>

            <div class="form-group">
          <label for="adm_no">Grade:</label>
          <select name="grade" value={{ $students->grade }}>

                <option value="Form One">Form One</option>
                <option value="Form One">Form Two</option>
                <option value="Form Three">Form Three</option>
                <option value="Form Four">Form Four</option>
            </select>
 
            </div>
              
        
          <div class="form-group">
          <label for="adm_no">Gender:</label>
          <select name="gender" value={{ $students->gender}}>
          <option value="male">Male</option>
          <option value="female">Female</option>
      </select>
          </div>
            <div class="form-group">
                <label for="date_of_birth">Date Of Birth:</label>
                <input type="date" class="form-control" name="date_of_birth" value={{ $students->date_of_birth }} />
                </div>
            <div class="form-group">
                <label for="enrollment_date">Enrollment Date:</label>
                <input type="date" class="form-control" name="enrollment_date" value={{ $students->enrollment_date }} />
            </div>
            <div class="form-group">
                <label for="home_address">Home Address:</label>
                <input type="text" class="form-control" name="home_address" value={{ $students->home_address }} />
            </div>
            <div class="form-group">
              <label for="parent_id">Parentid:</label>
              <input type="number" class="form-control" name="parent_id" value={{ $students->parent_id }}/>
          </div>    
          <div class="form-group">
              <label for="parent_first_name">Parent First Name:</label>
              <input type="text" class="form-control" name="parent_first_name" value={{ $students->parent_first_name }}/>
          </div>    
          <div class="form-group">
              <label for="parent_last_name">Parent Last Name:</label>
              <input type="text" class="form-control" name="parent_last_name" value={{ $students->parent_last_name }}/>
          </div>   
          <div class="form-group">
              <label for="parent_email">Parent Email:</label>
              <input type="text" class="form-control" name="parent_email" value={{ $students->parent_email }}/>
          </div>    
          <div class="form-group">
              <label for="parent_phone_number">Parents Phone Number:</label>
              <input type="number" class="form-control" name="parent_phone_number" value={{ $students->parent_phone_number }}/>
          </div>    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection