<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>HOME</title>
    <style>
        .container{margin-top:20px;}
        a{margin-bottom:5px;}
    </style>
</head>
<body>
    <div class="container">
        <a href="{{route('p_add')}}" class="btn btn-primary">ADD DATA</a>
        <table class="table">
         <TR>
            <th>ID</th>
            <th>MEMBER ID</th>
            <th>MEMBER DETAILS</th>
            <th>TOTAL AMOUNT</th>
            <th>STARTING DATE</th>
            <th>ENDING DATE</th>
            <th>EDIT</th>
            <th>DELETE</th>

        </TR>

        @foreach($key as $val)
        <tr>
            <td>{{$val->id}}</td>
            <td>{{$val->member_id}}</td>
            <td><a href="{{route('memberdetails',$val->id)}}" class="btn btn-primary">VIEW MEMBER</a></td>
            <td>{{$val->amount}}</td>
            <td>{{$val->sdate}}</td>
            <td>{{$val->edate}}</td>
            <td><a href="" class="btn btn-primary">EDIT</a></td>
            <td><a href="{{route('deletep',$val->id)}}" class="btn btn-danger">DELETE</a></td>


        </tr>
        @endforeach
        </table>
    </div>
</body>
</html>