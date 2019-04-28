@extends('layouts.layout')

@extends('layout1')

@section('main')
<div class="row">
 <div class="col-sm-4 offset-sm--3">
    <h1 class="display-7">Search Student</h1>
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
    <div class="col-md-6">
    <form action="/search" method="get">
    </div>
        <div class="form-group">
        <input type="search" name="search" class="form-control">
        <span class="form-group-btn">
        <a href="{{ route('subject.create')}}"class="btn btn-primary">Search</td></a>
        </span>

        </div>
        

@section('main1')

@endsection
