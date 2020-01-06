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
	
    {{-- Themes Plugins --}}
    <link rel="stylesheet" href="{{asset('themes/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/animsition.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/socicon.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/ionicons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('themes/css/jquery.fancybox.min.css')}}"/>
    
    {{-- Styles Main Themes --}}
    <link rel="stylesheet" href="{{asset('themes/css/style.css')}}"/>

    {{-- Styles TheSaaS --}}
    {{-- <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css"> --}}

    @yield('content_head')
</head>

<body class="home-zoom fixed-footer">

    @include('layout._nav')
  
        @yield('content')

    @include('layout._footer')

    {{-- Themes Script --}}
    <script type="text/javascript" src="{{asset('themes/js/jquery.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/smoothscroll.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/popper.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/bootstrap.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/animsition.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/owl.carousel.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/wow.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/jquery.pagepiling.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/isotope.pkgd.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/jquery.fancybox.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/TweenMax.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/ScrollMagic.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/animation.gsap.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/jquery.viewport.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/jquery.countdown.min.js')}}"></script>	
    <script type="text/javascript" src="{{asset('themes/js/script.js')}}"></script>	

    {{-- Script TheSaaS --}}
    {{-- <script src="{{ asset('js/page.js') }}"></script> --}}
    
    {{-- Custom Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('content_footer')
   
</body>

</html>