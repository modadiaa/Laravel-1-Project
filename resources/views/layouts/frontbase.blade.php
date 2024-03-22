{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Yuksel CELIK">
    <link rel="icon" type="image/x-icon" href="@yield('icon')">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/nouislider.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    @yield('head')
</head>

<body>
    @include('home.header')

    @section('sidebar')
        @include('home.sidebar')
    @show

    @section('slider')

    @show

    @yield('content')

    <@include('home.footer') @yield('foot') </body>

</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title' , $setting->translate(app()->getlocale())->title)  </title>
    {{-- <meta name ="title", content="@yield('title' )">
    <meta name ="description", content="@yield('content')"> --}}

    <meta name ="keywords", content="@yield('keyword',  $setting->title)">
    <meta name ="description", content="@yield('description',  $setting->description)">




    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/front/css/magnific-popup.css">
	<link href="{{ asset('assets') }}/front/css/fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/front/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/front/css/style.css">
    @yield('css')

    <body>

        @include('home.header')
        @yield('content')
        @include('home.footer')


        <script src="{{ asset('assets') }}/front/js/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/popper.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/jquery.easing.1.3.js"></script>
        <script src="{{ asset('assets') }}/front/js/jquery.waypoints.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/jquery.stellar.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/owl.carousel.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/jquery.animateNumber.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('assets') }}/front/js/google-map.js"></script>
        <script src="{{ asset('assets') }}/front/js/fancybox.min.js"></script>
        <script src="{{ asset('assets') }}/front/js/main.js"></script>
        @yield('js')


    </body>

    </html>
