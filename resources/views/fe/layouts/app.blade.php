<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Wibukoding</title>

    @vite(['resources/scss/fe/app.scss', 'resources/js/fe/app.js'])

</head>
<body class="flex flex-col min-h-screen">
    @include('fe.layouts.navbar')

    <div class="w-full">
        <div class="max-w-screen-xl mx-auto px-4">
            @yield('content')
        </div>
    </div>

    @include('fe.layouts.footer')
</body>
</html>
