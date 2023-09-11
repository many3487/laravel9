<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items.center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" class="h-12">
                </a>
                <form action="">
                    <input type="text" name="" id="" placeholder="Buscar">
                </form>
            </div>
                @auth
                <a href="{{route('dashboard')}}">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
                </form>
                @else
                <a href="{{route('login')}}">Login</a>
                @endauth
        </header>
        <div  style="opacity: 0.6; height: 1px; margin-bottom: 2rem; background: linear-gradient(to right, rgba(200,200,200,0) 0%, rgba(200,200,200,1) 30%, rgba(200,200,200,1) 70%, rgba(200,200,200,0) 100%); )">

        </div>
        @yield('content')
        <p class="py-16">
            <img src="{{ asset('img/logo.png') }}" class="h-12 mx-auto">

        </p>
        
    </div>
   
</body>
</html>