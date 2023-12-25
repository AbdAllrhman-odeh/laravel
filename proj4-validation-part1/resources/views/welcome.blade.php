<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>{{--  --}}
    <h1>login</h1>
    <form action="{{route('login')}}" method="POST">
        @csrf
        your email:
        <input type="email" name="email">
        <br><br>
        your password:
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="login">
    </form>
    <a href="register">register..</a>
</body>
</html>