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
                <h2>Student details</h2>
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
                        @foreach($details as $student)
                        <tr>
                            <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->adm_no}}</td>
                            <td>{{$student->grade}}</td>
                            
                <td>
                    <a href="{{ route('subject.create')}}" class="btn btn-primary">Add Subject</td></a><br>

                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @elseif(isset($message))
                <p>{{ $message }}</p>
                @endif
            </div>

@endsection
 </body>
</html>