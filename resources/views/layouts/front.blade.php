<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title> 
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->

    <link href="{{ asset('frontend/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{ asset('frontend/css/blk-design-system.css?v=1.0.0') }}" rel="stylesheet"/>
    
    <!-- custom -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet"> -->
       <!-- carousel -->
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet"> 

      <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">

        <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
   a{
       text-decoration: none;
   }
</style>
</head>
<body>

    @include('layouts.inc.frontnavbar')

    <div class="content">
        @yield('content')
    </div>  

    <script src="{{ asset('frontend/js/jzquery-3.6.0.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/custom.js') }}"></script> 
    <script src="{{ asset('frontend/js/checkout.js') }}"></script> 

    <!-- dattebayo odama javascript -->
    <script src="{{ asset('frontend/js/core/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/core/jquery.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/core/popper.min.js') }}" defer></script>

    <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('frontend/js/plugins/bootstrap-switch.js') }}" defer></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('frontend/js/plugins/nouislider.min.js') }}" defer></script>
    <!-- Chart JS -->
    <script src="{{ asset('frontend/js/plugins/chartjs.min.js') }}"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{ asset('frontend/js/plugins/moment.min.js') }}" defer></script>
    <!-- <script src="{{ asset('frontend/js/plugins/bootstrap-datetimepicker.js') }}" defer></script> -->
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <!-- <script src="../assets/demo/demo.js"></script> -->
    <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
    <!-- <script src="{{ asset('frontend/js/blk-design-system.min.js?v=1.0.0') }}" defer></script> -->

    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('admin/css/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/css/js/material-dashboard.js?v=2.1.0') }}" defer></script>
    <script src="{{ asset('admin/css/js/bootstrap-notify.js') }}" defer></script>
    <script src="{{ asset('admin/css/js/chartist.min.js') }}" defer></script>
     -->
      
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
        swal("{{ session('status') }}");
        </script>
    @endif
    @yield('scripts')
</body>
</html>
