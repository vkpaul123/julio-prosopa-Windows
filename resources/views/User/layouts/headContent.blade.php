{{-- <meta charset="utf-8"> --}}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Julio-Prosopa - @yield('title')</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

{{-- Vue.js --}}
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/Ionicons/css/ionicons.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/dist/css/AdminLTE.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/dist/css/skins/_all-skins.min.css') }}">
<!-- Morris chart -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/morris.js/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/jvectormap/jquery-jvectormap.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ @asset('rawThemes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

<link rel="stylesheet" href="{{ asset('rawThemes/greenFair/css/isotope/style.css') }}">

<link rel="stylesheet" href="{{asset('rawThemes/adminLTE/plugins/iCheck/square/green.css')}}">


<!--Main Stylesheet-->
<link href="{{ asset('rawThemes/greenFair/css/style.css') }}" rel="stylesheet">
<!--Responsive Framework-->
<link href="{{ asset('rawThemes/greenFair/css/responsive.css') }}" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Modernizer Script for old Browsers -->
{{-- <script src="{{ @asset('rawThemes/brandi/js/modernizr-2.6.2.min.js')}}"></script> --}}

<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

@section('pageSpecificHeadContent')
@show