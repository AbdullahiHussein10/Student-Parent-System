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
        <form method="post" action="{{ route('subject.update', $subjects->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $subjects->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $subjects->last_name }} />
            </div>

            <div class="form-group">
                <label for="adm_no">adm_no:</label>
                <input type="text" class="form-control" name="adm_no" value={{ $subjects->adm_no }} />
            </div>

            <div class="form-group">
                <label for="subject_code">subject_code:</label>
                <input type="text" class="form-control" name="subject_code" value={{ $subjects->subject_code }} />
            </div>
            <div class="form-group">
                <label for="subject_name">subject_name:</label>
                <input type="text" class="form-control" name="subject_name" value={{ $subjects->subject_name }} />
            </div>
            <div class="form-group">
                <label for="subject_teacher">subject teacher:</label>
                <input type="text" class="form-control" name="subject_teacher" value={{ $subjects->subject_teacher }} />
                </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection