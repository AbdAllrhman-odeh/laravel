<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit page</title>
</head>
<body>
    <form action="{{route('editFunction',Request::route('id'))}}" method="POST">
        @csrf
        Movie Name:
        <input type="text" name="movieName" value="{{$info->movieName}}"><br><br> 

        
        Movie Description:
        <input type="text" name="movieDescription" value="{{$info->movieDescription}}"><br><br>

        
        Movie Generation:
        <input type="text" name="movieGener" value="{{$info->movieGener}}"><br><br>

        <input type="submit" value="Save edit">
        <a href="/index">back to home</a>
    </form>
</body>
</html>