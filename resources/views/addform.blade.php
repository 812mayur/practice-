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
    <form action="" method="post">
        @csrf
        <input type="text" placeholder="MEMBER ID" name="member_id" class="form-control"><br>
        <input type="text" placeholder="AMOUNT" name="useramount" class="form-control"><br>
        <input type="date" placeholder="STARTING DATE" name="sdate" class="form-control"><br>
        <input type="date" placeholder="ENDING DATE" name="edate" class="form-control"><br>
        <input type="submit" class="btn btn-primary" value="ADD">

    </form>

    </div>
</body>
</html>