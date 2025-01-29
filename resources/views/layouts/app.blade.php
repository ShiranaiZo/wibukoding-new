<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Wibukoding</title>

    <link rel="icon" type="image/x-icon" href="{{ storage_url('static/logo.png') }}">

    @vite(['resources/scss/fe/app.scss', 'resources/js/fe/app.js'])

</head>

<body class="flex flex-col min-h-screen bg-default-bg">
    @include('layouts.navbar')

    <div class="w-full">
        <div class="max-w-screen-xl mx-auto p-4">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
