@extends('layouts.layout')


<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-3">
            
            <p><strong>ADD TEACHERS</strong></p>

                <form method="post" action="{{ route('teacher.store') }}">
                @csrf
                    <div class="form-group">
                        
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name">
                    </div>

                        <div class="form-group">
                        
                        <label for="last_name">Last Name </label>
                        <input type="text" name="last_name">
                    </div>
                        
                    <div class="form-group">
                        
                        <label for="id_no">Identification Number</label>
                        <input type="string" name="id_no">
                    </div>

                    <div class="form-group">
                        
                        <label for="phone_number">Phone Number</label>
                        <input type="string" name="phone_number">
                    </div>

                    <div class="form-group">
                        
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" name="date_of_birth">
                    </div>

                    <div class="form-group">
                        
                        <label for="date_of_employment">Date of Employment</label>
                        <input type="date" name="date_of_employment">
                    </div>

                    <div class="form-group">
                        
                        <label for="email">E-mail</label>
                        <input type="email" name="email">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Teachers</button>