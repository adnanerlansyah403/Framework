@php
    $currentRoute = Route::currentRouteName();
    dd($currentRoute);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'List')</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header class="container mx-auto py-4">
        <nav>
            <ul class="flex items-center gap-4">
                <li>
                    <a href="{{ url('/') }}" class="">User</a>
                </li>
                <li>
                    <a href="{{ url('/sekolah') }}">Sekolah</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container mx-auto">
        @yield('content_master')
    </div>
    
</body>
</html>