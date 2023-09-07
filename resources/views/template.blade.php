<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('./../css/menu.css') }}" type="text/css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
</head>
<body>
    <nav>
        <li>
            <a href="{{route('home')}}">Home</a>
        </li>
        <li>
            <a href="{{route('blog')}}">Blog</a>
        </li>
        @auth
        <a href="{{route('dashboard')}}">Dashboard</a>
        <a href="{{route('logout')}}">Logout</a>
        @else
        <a href="{{route('login')}}">Login</a>


        @endauth

    </nav>
    <hr>
    @yield('content')
</body>
</html>