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
    <form action="{{route('added')}}" method="post">
        @csrf
        <input type="text" placeholder="ENTER NAME" name="username" class="form-control"><br>
        <input type="date" placeholder="DATE OF BIRTH" name="userbirth" class="form-control"><br>
        <input type="address" placeholder="ENTER ADDRESS" name="useraddress" class="form-control"><br>
        <input type="email" placeholder="ENTER EMAIL" name="useremail" class="form-control"><br>
        <input type="submit" class="btn btn-primary" value="ADD">

    </form>

    </div>
</body>
</html>