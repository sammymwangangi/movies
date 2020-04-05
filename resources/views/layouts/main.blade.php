<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <link href="{{asset ('fontawesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/main.css')}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <livewire:styles>
</head>
<body class="bg-purple-900 font-sans text-white">
    <nav class="lg:flex border-b border-gray-800">
        <div class="container mx-auto lg:flex items-center justify-between px-4 py-6">
            <ul class="lg:flex items-center">
                <li class="font-extrabold text-2xl">
                    <a href="{{ url('/') }}" class="text-orange-500">
                        <i class="fas fa-play-circle"></i> Movie App
                    </a>
                </li>
                <li class="sm:ml-6 lg:ml-16">Movies</li>
                <li class="lg:ml-6">TV Shows</li>
                <li class="lg:ml-6">Actors</li>
            </ul>
            <div class="lg:flex items-center">
                <livewire:search-dropdown>
                <div class="lg:ml-4">
                    <a href="#">
                        <img src="{{ asset('images/me.jpg') }}" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <livewire:scripts>
</body>
</html>
