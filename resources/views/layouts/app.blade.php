<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="antialiased bg-background text-foreground">
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
        once: true,
        easing: 'ease-out-cubic',
        duration: 900,
        });
    </script>

    @stack('scripts')
</body>

</html>