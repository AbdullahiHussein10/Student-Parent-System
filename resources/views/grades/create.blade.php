

@extends('layouts.layout')

@section('main')
<div class="row">
 <div class="col-xs-4 offset-sm-2">

    <div class="m-4 pt-4">
    <h1 class="display-7">grades Details</h1>




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
          <select name="subject_code">

                <option value="MAT">MAT</option>
                <option value="ENG">ENG</option>
                <option value="KISW">KISW</option>
                <option value="BIO">BIO</option>
                <option value="PHY">PHY</option>
                <option value="CHEM">CHEM</option>
                <option value="HIS">HIS</option>
                <option value="GEO">GEO</option>
                <option value="CRE">CRE</option>
                <option value="IRE">IRE</option>
                <option value="FRE">FRE</option>
                <option value="GER">GER</option>
                <option value="ART">ART</option>
                <option value="P/MECH">P/MECH</option>
                <option value="COMP">COMP</option>
            </select>
 
            </div>
            <div class="form-group">
          <label for="subject_name">Subject name:</label>
          <select name="subject_name">

                <option value="Mathematics">Mathematics</option>
                <option value="English">English</option>
                <option value="Kiswahili">Kiswahili</option>
                <option value="Biology">Biology</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="History">History</option>
                <option value="Geography">Geography</option>
                <option value="Christian Religious Education">CRE</option>
                <option value="Islamic Religious Education">IRE</option>
                <option value="Business Studies">Business Studies</option>
                <option value="French">French</option>
                <option value="German">German</option>
                <option value="Art And Design">Art and Design</option>
                <option value="Power Mechanics">Power Mechanics</option>
                <option value="Computer Studies">Computer Studies</option>
            </select>
 
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
