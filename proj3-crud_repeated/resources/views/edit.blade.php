<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <form action="{{route('update',$info->id)}}" method="POST">
        @csrf
        <label for="">your Name</label>
        <input type="text" name="name" value="{{$info->name}}">
        <br><br>

        <label for="">your Email</label>
        <input type="text" name="email" value="{{$info->email}}">
        <br><br>
        <input type="submit" value="edit">
    </form>
</body>
</html>