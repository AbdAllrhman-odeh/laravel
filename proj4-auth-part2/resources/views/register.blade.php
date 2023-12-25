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
        be with us
    </h1>
    <form action="{{route('store')}}" method="POST">
        @csrf
         your email:
        <input type="email" name="email">
        <br><br>
         your pass:
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="sign up">
    </form>
    <a href="/">go back</a>
</body>
</html>