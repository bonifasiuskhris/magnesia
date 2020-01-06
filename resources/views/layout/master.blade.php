<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<title>Magnesia</title>
	<meta name="description" content="">
    <meta name="author" content="">
    
    {{-- Favicon --}}
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
    {{-- Themes --}}
    <link rel="stylesheet" href="{{asset('themes/css/base.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/skeleton.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/layout.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/color.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('themes/css/et-line.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/owl.transitions.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/retina.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/settings.css')}}"/>
	<link rel="stylesheet" href="{{asset('themes/css/layers.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/navigation.css')}}"/>

    <script type="text/javascript" src="{{asset('themes/js/modernizr.custom.js')}}"></script> 
        
    {{-- Styles TheSaaS --}}
    {{-- <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css"> --}}

    @yield('content_head')
</head>

<body class="royal_preloader">

	<div id="royal_preloader"></div>
	<div id="remove-class" class="preload">

    @include('layout._nav')
  
        @yield('content')

    @include('layout._footer')

	</div>
   
    {{-- Themes Script --}}
    <script type="text/javascript" src="{{asset('themes/js/jquery-2.1.1.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/royal_preloader.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/masonry.js')}}"></script> 
    <script type="text/javascript" src="{{asset('themes/js/isotope.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>

    {{-- Revolution JS Files --}}
    <script type="text/javascript" src="{{asset('themes/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/jquery.themepunch.revolution.min.js')}}"></script> 
    {{-- Slider Revolution 5.0 Ext --}}
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/js/custom.js')}}"></script>    

    {{-- Script TheSaaS --}}
    {{-- <script src="{{ asset('js/page.js') }}"></script> --}}
    
    {{-- Custom Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('content_footer')
   
</body>

</html>