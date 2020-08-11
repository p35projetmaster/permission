<!DOCTYPE html>
<html lang="fr">

<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='Precon'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Title Tag  -->
		<title>Baosem : Edition & Publicité</title>
         
		<!-- Favicon -->
	    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>	
		<link rel="icon" type="image/png" href="img/favicon.html">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{asset('site/css/animate.min.css')}}">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{asset('site/css/font-awesome.css')}}">
		<!-- FancyBox CSS -->
		<link rel="stylesheet" href="{{asset('site/css/jquery.fancybox.min.css')}}">
		<!-- Magnipic Popup CSS -->
		<link rel="stylesheet" href="{{asset('site/css/magnific-popup.min.css')}}">
		<!-- Slick Nav CSS -->
		<link rel="stylesheet" href="{{asset('site/css/slicknav.min.css')}}">
		<!-- Slick Slider CSS -->
		<link rel="stylesheet" href="{{asset('site/css/slick-slider.css')}}">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Precon Stylesheet -->
		<link rel="stylesheet" href="{{asset('site/css/reset.css')}}">
		<link rel="stylesheet" href="{{asset('site/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
		<link rel="stylesheet" href="{{asset('site/css/skins/skin1.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/mdb.min.css')}}">
        @yield('header')
    <style>
        /* Dropdown Button */

 
/* The container <div> - needed to position the dropdown content */
.dropdown1 {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown1:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
/* .dropdown1:hover .dropbtn {background-color: #3e8e41;} */
    </style>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
		<![endif]-->

		<link rel="stylesheet" href="#" id="precon_custom">
	</head>
	<body id="body" section onload="initialize()" onload="Show(id)">

		<!-- Preloader -->
		<div class="preloader-main">
			<div class="preloader"></div>
		</div>
		<!--/ End Preloader -->

		<div id="layout" class="boxed-layout">


            @include('site.partials.header')

            @yield('corp')
            @include('site.partials.footer')

    </div> <!-- End Layout -->

<!-- Jquery JS -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
		<script src="{{asset('site/js/jquery.min.js')}}"></script>
		<script src="{{asset('site/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{asset('site/js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
		<!-- Modernizr JS -->
		<script src="{{asset('site/js/modernizr.min.js')}}"></script>
		<!-- Isotop JS -->
		<script src="{{asset('site/js/isotope.pkgd.min.js')}}"></script>
		<!-- Slick Slider JS -->
		<script src="{{asset('site/js/slick.min.js')}}"></script>
		<!-- FacnyBox JS -->
		<script src="{{asset('site/js/jquery-fancybox.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{asset('site/js/steller.min.js')}}"></script>
		<!-- Easing JS -->
		<script src="{{asset('site/js/easing.min.js')}}"></script>
		<!-- Magnipic Popup JS -->
		<script src="{{asset('site/js/magnific-popup.min.js')}}"></script>
		<!-- Slick Nav JS -->
		<script src="{{asset('site/js/jquery.slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
		<script src="{{asset('site/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Active JS -->
        <script src="{{asset('site/js/active.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <script src="{{asset('site/js/mdb.min.js')}}"></script>
       
        @yield('footer')
	</body>
</html>
