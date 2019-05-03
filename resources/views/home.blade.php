@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">
                <a href="/studentdetails">Students Details</a>
                </div>

                <div class="card-body">
                <a href="/subject">Courses</a>
                </div>


                <div class="card-body">
                <a href="/studentsperfomance">Students perfomance</a>
                </div>
                    
                </div>
            </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the Admin DashBoard!
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
