<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-3xl font-black">
                DevStagram
            </h1>

            @auth
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('posts.index', ['user' => auth()->user()->username]) }}">Dashboard</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="font-bold uppercase text-gray-600 text-sm" type="submit">Logout</button>
                </form>
            </nav>
            @endauth
            @guest
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login  </a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/register">Create Account</a>
            </nav>
            @endguest
        </div>
    </header>

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">
            @yield('title')
        </h2>
        @yield('content')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados
        {{ now()->year}}
    </footer>
</body>

</html>


