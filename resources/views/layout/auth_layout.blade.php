<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>auth</title>

    @include('partial.css')
</head>

<body class="hold-transition register-page">
    @yield('content')

    @include('partial.js')
    @include('sweetalert::alert')

</body>

</html>
