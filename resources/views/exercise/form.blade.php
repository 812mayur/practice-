<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    
    <title>Add files</title>
</head>
<body>
    <div class="container">
        <h3>ADD FILE</h3>
    <!-- <a href="" class="btn btn-primary">fgdf</a> -->
    <form action="{{route('store')}}" method="POST" class="form-group shadow-lg" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control col-sm-6">
        <input type="submit" class="btn btn-primary">

    </form>
</div>
    
</body>
</html>