@extends('layouts.layout')


<div class="container">

    <div class="row justify-content-end">

        <a href="{{ url('/home') }}">Home</a>

        <div class="row justify-content-center">

            <div class="col-md-6">

                <p><strong>Teachers</strong></p>

                    <table class="table table-striped">

                        <thead>
                        <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>ID No.</td>
                        <td>Phone Number</td>
                        <td>Date of Birth</td>
                        <td>Date of Employment</td>
                        </td>E-mail</td>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                        <td>$teacher->first_name</td>
                        <td>$teacher->last_name</td>
                        <td>$teacher->id_no</td>
                        <td>$teacher->phone_number</td>
                        <td>$teacher->date_of_birth</td>
                        <td>$teacher->date_of_employment</td>
                        <td>$teacher->email</td>

                        <a href="{{ route('subject.edit',$subject->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                         <td>
                <form action="{{ route('subject.destroy', $subject->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
                        </tbody>

                        </table>
                            <div>
                            </div>
@endsection




