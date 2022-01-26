<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    
    <!-- CSRF Token -->    
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    Admin
  </title>

    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


     <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
   
    
  
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet">


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    -->
    
</head> 
<body class="dark-edition">


<div class="wrapper">

    @include('layouts.inc.sidebar')

    <div class="main-panel">
    @include('layouts.inc.adminnav')

    <div class="content">
         @yield('content')

    </div>
    @include('layouts.inc.adminfooter')
    </div>
    
</div>
  

  <!-- Scripts -->
<script src="{{ asset('admin/css/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('admin/css/js/popper.min.js') }}" defer></script>
<script src="{{ asset('admin/css/js/material-dashboard.js.map') }}" defer></script>
<script src="{{ asset('admin/css/js/material-dashboard.min.js') }}" defer></script>
<script src="{{ asset('admin/css/js/material-dashboard.js') }}" defer></script>




<script src="{{ asset('admin/css/js/bootstrap-material-design.min.js') }}" defer></script>
<script src="https://unpkg.com/default-passive-events" defer></script>
<!-- <script src="https://unpkg.com/@popperjs/core@2" defer></script> -->


<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('admin/css/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
<script src="{{ asset('admin/css/js/material-dashboard.js?v=2.1.0') }}" defer></script>
<script src="{{ asset('admin/css/js/bootstrap-notify.js') }}" defer></script>
<script src="{{ asset('admin/css/js/chartist.min.js') }}" defer></script>

<script>

  var icon = document.getElementById("icon");

  icon.onclick = function() {
    document.body.classList.toggle("dark-edition");
  }

</script>

    
    <!-- Scripts -->
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
      swal("{{ session('status') }}");
    </script>
@endif
@yield('scripts')
</body>
</html>
