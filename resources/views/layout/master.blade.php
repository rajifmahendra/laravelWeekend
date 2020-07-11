<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <a href="/karyawan" class="nav-link @yield('menuKaryawan')">Data Karyawan</a>
        </ul>
        <ul class="navbar-nav">
            <a href="/hrd" class="nav-link @yield('menuHRD')">Data HRD</a>
        </ul>
        <ul class="navbar-nav">
            <a href="{{ route('gallery') }}" class="nav-link @yield('menuGallery')">Gallery</a>
        </ul>
    </nav>

    @yield('content')

    <footer class="bg-dark py-4 text-white mt-4 text-center">
            <div class="container">
                Sistem Pendataan Karyawan | Copyright {{ date('Y') }}
            </div>
    </footer>
    
    
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>