<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
@yield('main1')

<div class="row">
            <div class="col-sm-12">
                @if(isset($details))
                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>user details</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>First Name</td>
                <td>Last Name</td>
                <td>Admission Number</td>
                            <td>Grade</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <tr>
                            <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->adm_no}}</td>
                            <td>{{$user->grade}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @elseif(isset($message))
                <p>{{ $message }}</p>
                @endif
            </div>

 </body>
</html>