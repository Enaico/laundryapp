<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laundry</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

@include('layouts.navbar')
@include('layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
@include('layouts.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset ('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset ('assets/js/popper.js')}}"></script>
    <script src="{{asset ('assets/js/tooltip.js')}}"></script>
    <script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset ('assets/js/moment.min.js')}}"></script>
    <script src="{{asset ('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset ('assets/js/scripts.js')}}"></script>
    <script src="{{asset ('assets/js/custom.js')}}"></script>
</body>

</html>
