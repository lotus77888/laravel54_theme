<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/loin.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Laravel Admin | 
        @yield('title')
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    {{--<link href="{{ asset('assets/css/animate.min.css')}}" rel="stylesheet"/>--}}

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->

    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/css/jquery-ui.min.css')}}">

    <link rel="stylesheet" href="{{ asset('vendors/metismenu/css/metisMenu.min.css')}}">


    <!--     Fonts and icons     -->
    <link href="{{ asset('vendors/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    {{--<link href="{{ asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />--}}
    @yield('links')

</head>
<body id="body">

    <div class="wrapper">
        <div class="sidebar" data-color="" data-image="" style="background: #212529;">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->


    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Laravel Admin
            </a>
        </div>
        @include('includes.leftmenu')
    </div>
</div>

<div class="main-panel">

    @include('includes.header')

    <div class="content">
       @yield('content')
   </div>

   <footer class="footer">
      @include('includes.footer')
  </footer>

</div>
</div>


</body>
<!--   Core JS Files   -->
<!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> -->
<script src="{{ asset('vendors/jquery/js/jquery.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('vendors/jquery-ui/js/jquery-ui.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('vendors/metismenu/js/metisMenu.min.js')}}" type="text/javascript"></script>

<!-- <script src="vendors/jquery/js/jquery.slim.min.js" type="text/javascript"></script> -->


<script src="{{ asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>

<!--  Charts Plugin -->
{{--<script src="{{ asset('assets/js/chartist.min.js')}}"></script>--}}

<!--  Notifications Plugin    -->
{{--<script src="{{ asset('assets/js/bootstrap-notify.js')}}"></script>--}}

<!--  Google Maps Plugin    -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>--}}

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js')}}"></script>
@yield('scripts')


<script type="text/javascript">
   $(document).ready(function(){

   $('#menu1').metisMenu();

});
       
</script>

</html>
