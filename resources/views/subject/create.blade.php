@extends('layouts.layout')

<div>
    <a href="{{ action('SubjectController@index') }}" class="btn">View </a>
    </div>

@section('main')

          <div class="container">
          <div class="row justify-content-center">
          <div class="col-md-6">
          <p><strong>Add Subjects</strong></p>

          <form method="post" action="{{ route('subject.store')}}">
          @csrf

          <div class="form-group">
          <label for="subject_name">Subject Name</label><br>
          <input type="text" name="subject_name">
          </div>

          <div class="form-group">
          <label for="subject_code">Subject Code</label><br>
          <input type="string" name="subject_code">
          </div>

          <div class="form-group">
          </label for="subject_teacher">Subject Teacher</label><br>
          <input type="text" name="subject_teacher">
          </div>

          <button type="submit" class="btn btn-primary">Add Subjects</button>
