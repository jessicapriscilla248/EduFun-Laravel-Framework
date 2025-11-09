<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <title>@yield('title')</title>
    @include('layout.bootstrap')

</head>
<body>
    {{-- MASTER UNTUK SEBAGAI TEMPLATE --}}
    {{-- dijalanin sm anaknya kayak kosenp oop --}}

    <div class="container">
        {{-- header --}}
        @include('layout.header')

        {{-- konten --}}
        {{-- konten akan tampilkan di baris 21 ini --}}
        @yield('konten') 
        {{-- sesuai nama section yg ada di mahasiswa blade --}}

        @yield('list')

        {{-- footer --}}
        @include('layout.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>