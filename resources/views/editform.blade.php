<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <title>ADD MEMBER</title>
    <style>
        .container{margin-top:20px;}
    </style>
</head>
<body>
    <div class="container">
    @foreach($key as $val)

    <form action="{{route('updated',$val->id)}}" method="post">
        @csrf
        <input type="text" placeholder="ENTER NAME" name="username" class="form-control" value="{{$val->name}}"><br>
        <input type="date" placeholder="DATE OF BIRTH" name="userbirth" class="form-control" value="{{$val->birth}}"><br>
        <input type="address" placeholder="ENTER ADDRESS" name="useraddress" class="form-control" value="{{$val->address}}"><br>
        <input type="email" placeholder="ENTER EMAIL" name="useremail" class="form-control" value="{{$val->email}}"><br>
        <input type="submit" class="btn btn-primary" value="UPDATE">
@endforeach
    </form>

    </div>
</body>
</html>