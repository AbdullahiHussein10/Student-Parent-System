@extends('layouts.layout')


@section('main')
<div class="row">
    <div class="col-sm-5 col-sm-2">
        <h1 class="text-muted, display=6">Update Marks</h1>

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
        <form method="post" action="{{ route('subject_grades.update', $subject_grades->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="subject_code">First Name:</label>
                <input type="text" class="form-control" name="subject_code" value={{ $subject_grades->subject_code }} />
            </div>

            <div class="form-group">
                <label for="subject_name">Last Name:</label>
                <input type="text" class="form-control" name="subject_name" value={{ $subject_grades->subject_name }} />
            </div>

            <div class="form-group">
                <label for="subject_marks">subject_marks:</label>
                <input type="text" class="form-control" name="subject_marks" value={{ $subject_grades->subject_marks }} />
            </div>

            <div class="form-group">
                <label for="subject_grade">subject_grade:</label>
                <input type="text" class="form-control" name="subject_grade" value={{ $subject_grades->subject_grade }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection