@php
    $currentRoute = Route::currentRouteName();
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

    {{-- <header class="container mx-auto py-4">
        <nav>
            <ul class="flex items-center gap-4">
                <li>
                    <a href="{{ url('/') }}" class="{{ $currentRoute === 'index' ? 'linkActive' : '' }}">User</a>
                </li>
                <li>
                    <a href="{{ url('/sekolah') }}" class="{{ $currentRoute === 'sekolah' ? 'linkActive' : '' }}">Sekolah</a>
                </li>
            </ul>
        </nav>
    </header> --}}

    <div class="container mx-auto py-[60px]">
        @yield('content_master')
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>