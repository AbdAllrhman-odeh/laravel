<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <h1>
        register    
    </h1>
    <form action="{{route('store')}}" method="POST">
        @csrf
        your email:
        <input type="email" name="email">
        <br><br>
        your password:
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="register">
    </form>
    <a href="/">back</a>
</body>
</html>