<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Wibukoding</title>

    @vite(['resources/scss/be/app.scss', 'resources/js/be/app.js'])
</head>

<body>
    @include('be.layouts.navbar')
    @include('be.layouts.sidebar')

    <div class="p-8 ml-72 mt-7">
        @yield('content')
    </div>
</body>
</html>
