<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        @yield('css');
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="image">go for image</a>
            </li>
            <li>
                <a href="video">go for video</a>
            </li>
            <li>
                <a href="audio">go for audio</a>
            </li>
        </ul>
    </nav>

    <p>@yield('body')</p>
    <footer style="color:red; text-align:center;">
        @yield('footer')
    </footer>
</body>
</html>