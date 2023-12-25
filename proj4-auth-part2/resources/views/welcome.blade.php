<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        sign in
    </h1>
    <form action="{{route('login')}}" method="POST">
        @csrf
        Enter your email:
        <input type="email" name="email">
        <br><br>
        Enter your pass:
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="login">
    </form>
    <a href="/create">or register</a>
</body>
</html>