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
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('learn.css') }}">

    {{-- <link rel="stylesheet" href="node_modules/aos/dist/aos.css"> --}}
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;400&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

    @include('partials.navbarStudent')

    @yield('content')

    @include('partials.footer')
    {{-- JS --}}
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('node_modules/waypoints/noframework.waypoints.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/main.js') }}"></script>
    {{-- <script src="node_modules/aos/dist/aos.js"></script> --}}
</body>
{{-- <script> AOS.init(); </script> --}}
</html>
