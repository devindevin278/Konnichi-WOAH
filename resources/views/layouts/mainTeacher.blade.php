<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >

</head>
<body>

    @include('partials.navbarTeacher')


    @yield('content')

    @include('partials.footer')


    {{-- JS --}}
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/waypoints/noframework.waypoints.js"></script>
    <script src="/main.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script> AOS.init(); </script>
</body>
</html>
