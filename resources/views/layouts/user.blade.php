<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
	<!-- Page Title Here -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="CareZone is a Clean, Modern and Big Car Dealer, Car Portal, Second Hand Car Portal, Compare Car and Car Specification Web Portal HTML 5 Template. CarZone is a ready made Wire-frame for HTML File with all required pages." />
<meta property="og:title" content="CarZone - Car Dealer Automotive Responsive HTML5 Template" />
<meta property="og:description" content="CareZone is a Clean, Modern and Big Car Dealer, Car Portal, Second Hand Car Portal, Compare Car and Car Specification Web Portal HTML 5 Template. CarZone is a ready made Wire-frame for HTML File with all required pages." />
<meta property="og:image" content="social-image.png" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/user/images/favicon.png') }}">
<link rel="icon" href="{{ asset('assets/user/images/favicon.ico" type="image/x-icon') }}">
<!-- Page Title Here -->
<title>CARS ZONE</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/fontawesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/flaticon/css/flaticon.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/magnific-popup.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/plugins/rangeslider/rangeslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/page-error-404.html') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/style.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/templete.css') }}">
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/skin/skin-1.css') }}">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
</head>

@include('master.nav-desk-user')

@yield('content')
    
@include('master.foot-desk-user')


<script src="{{ asset('assets/user/js/combine.js') }}"></script>
<script src="{{ asset('assets/user/js/jquery.searchable-1.0.0.min.js') }}"></script>
<script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>