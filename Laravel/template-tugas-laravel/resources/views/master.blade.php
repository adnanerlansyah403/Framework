<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tugas 1 - Laravel Blade Templates')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="@yield('icon', 'assets/images/logo.png')">
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="container">

        <h1 class="mx-auto text-[4rem] text-center font-bold text-green-400 mb-4">Daftar User</h1>
        <div class="flex items-center flex-wrap gap-4">
            @yield('content_master')
        </div>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>