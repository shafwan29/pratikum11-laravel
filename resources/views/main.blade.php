<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Contoh Template Menggunakan Blade --}}
    {{-- Ini file utama  --}}
    {{-- Includes ini adalah folder, seperti ini cara penggunaan nya --}}
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

</body>
</html>
