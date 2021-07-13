<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>TPCommerce</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('website/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/style.css') }}">
    @stack('css')
    <link rel="stylesheet" href="{{ asset('website/custom.css') }}">
</head>
<body>
    @include('website.base._navbar')

    @include('website.base._cart')

    @yield('content')
    
    @include('website.base._footer')
    
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('website/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('website/js/plugins.js') }}"></script>
    <!-- Classy Nav js -->
    <script src="{{ asset('website/js/classy-nav.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('website/js/active.js') }}"></script>
    @stack('script')
</body>

</html>