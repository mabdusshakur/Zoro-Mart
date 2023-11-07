<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> @yield('title') ZoroMart E-commerce</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.ico') }}" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/ui-range-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    @livewireStyles
</head>

<body>

    <!-- preloader area start -->
    @include('layouts.user.partials._preloader')
    <!-- preloader area end -->

    <!-- back to top start -->
    @include('layouts.user.partials._back_to_top')
    <!-- back to top end -->

    <!-- header area start -->
    @include('layouts.user.partials._header')
    <!-- header area end -->

    <!-- offcanvas area start -->
    @include('layouts.user.partials._off_canvas')
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>
        {{$slot}}
    </main>

    <!-- footer area start -->
    @include('layouts.user.partials._footer')
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('user/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('user/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('user/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery-ui-slider-range.js') }}"></script>
    <script src="{{ asset('user/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('user/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
