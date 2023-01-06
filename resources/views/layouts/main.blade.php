<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Times | {{ $title }}</title>
    <link rel="stylesheet" href={{ asset('./css/style.css') }}>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    @livewireStyles
</head>

<body>
    @include('partials.navbar')

    <div>
        @yield('menu')
    </div>

    <div class="container mt-5">
        @yield('container')
    </div>


    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    @livewireScripts
</body>

</html>
