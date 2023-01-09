<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Times Dashboard</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href={{ asset('css/nucleo-icons.css') }} rel="stylesheet" />
    <link href={{ asset('css/nucleo-svg.css') }} rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href={{ asset('css/style.css') }} rel="stylesheet" />
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include('dashboard.partials.sidebar')

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('dashboard.partials.navbarTop')
        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            @yield('container')
        </div>
        <!-- end cards -->
    </main>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
<!-- plugin for scrollbar  -->
<script src={{ asset('js/perfect-scrollbar.js') }} async></script>
<!-- main script file  -->
<script src={{ asset('js/soft-ui-dashboard-tailwind.js') }} async></script>

</html>
