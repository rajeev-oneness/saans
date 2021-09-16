<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	  <meta charset="utf-8">
	  <link rel="icon" href="images/favicon.png" type="image/png" sizes="40x19">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="{{ url('front/css/style.css') }}">

	  <link rel="preconnect" href="https://fonts.gstatic.com">
	  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	  <link rel="stylesheet" type="text/css" href="{{ url('front/css/animate.css')}}">
	  <link rel="stylesheet" type="text/css" href="font/flaticon.css">

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
 @include('front.layouts.header')
<!-- main_header -->

@yield('content')
{{-- here goes the content --}}

@include('front.layouts.footer')
<!-- main_footer -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script type="text/javascript" src="{{ url('front/js/wow.js') }}"></script>
  <script>
  jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
      console.log(jQuery(window).scrollTop())
      if(jQuery(window).scrollTop() > 63) {
        jQuery('header').addClass('navbar-fixed');
      }
      if(jQuery(window).scrollTop() < 64) {
        jQuery('header').removeClass('navbar-fixed');
      }
    });
  });
  </script>
  </script> 
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    new WOW().init();
  });
  </script>
</body>

</html>