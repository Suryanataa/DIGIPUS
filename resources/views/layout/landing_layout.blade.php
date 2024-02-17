<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIGIPUS</title>
    <link rel="shortcut icon" href="/images/digipus-logo.png" type="image/x-icon">
    @yield('style')
    @vite('resources/css/app.css')
</head>

<body class="bg-dasar">
    @include('landing.partial.navbar')
    @yield('content')
    @include('landing.partial.footer')


    @include('sweetalert::alert')
    @yield('script')

    <script>
        const nav = document.getElementById('nav');
        window.onscroll = function() {
            if (window.scrollY >= 10) {
                nav.classList.add("bg-white");
            } else {
                nav.classList.remove("bg-white");
            }
        };
    </script>
</body>

</html>
