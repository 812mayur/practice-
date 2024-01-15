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
        <a href="{{route('addform')}}" class="btn btn-primary">ADD MEMBER</a>
        <a href="{{route('phome')}}" class="btn btn-primary">PAYMENTS</a>

        <table class="table">
         <TR>
            <th>ID</th>
            <th>NAME</th>
            <th>D.O.B</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>EDIT</th>
            <th>DELETE</th>

        </TR>

        @foreach($key as $val)
        <tr>
            <td>{{$val->id}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->birth}}</td>
            <td>{{$val->address}}</td>
            <td>{{$val->email}}</td>
            <td><a href="{{route('editform',$val->id)}}" class="btn btn-primary">EDIT</a></td>
            <td><a href="{{route('delete',$val->id)}}" class="btn btn-danger">DELETE</a></td>


        </tr>
        @endforeach
        </table>
    </div>
</body>
</html>