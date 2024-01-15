<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER DETAILS</title>
</head>
<body>
    @foreach($key as $val)
      {{$val->id}}
      {{$val->name}}
      {{$val->email}}

    @endforeach
</body>
</html>