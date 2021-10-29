<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Saans</title>
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
        if (jQuery(window).scrollTop() > 63) {
          jQuery('header').addClass('navbar-fixed');
        }
        if (jQuery(window).scrollTop() < 64) {
          jQuery('header').removeClass('navbar-fixed');
        }
      });
    });
  </script>
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      if ($('.bbb_viewed_slider').length) {
        var viewedSlider = $('.bbb_viewed_slider');
        viewedSlider.owlCarousel({
          loop: true,
          margin: 10,
          autoplay: false,
          autoplayTimeout: 6000,
          nav: false,
          dots: false,
          responsive: {
            0: {
              items: 1
            },
            575: {
              items: 1
            },
            768: {
              items: 1
            },
            991: {
              items: 2
            },
            1199: {
              items: 4
            }
          }
        });
        if ($('.bbb_viewed_prev').length) {
          var prev = $('.bbb_viewed_prev');
          prev.on('click', function() {
            viewedSlider.trigger('prev.owl.carousel');
          });
        }
        if ($('.bbb_viewed_next').length) {
          var next = $('.bbb_viewed_next');
          next.on('click', function() {
            viewedSlider.trigger('next.owl.carousel');
          });
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      if ($('.bbb_viewed_slider2').length) {
        var viewedSlider = $('.bbb_viewed_slider2');
        viewedSlider.owlCarousel({
          loop: true,
          margin: 30,
          autoplay: true,
          autoplayTimeout: 6000,
          nav: false,
          dots: false,
          responsive: {
            0: {
              items: 1
            },
            575: {
              items: 1
            },
            768: {
              items: 1
            },
            991: {
              items: 2
            },
            1199: {
              items: 1
            }
          }
        });
        if ($('.bbb_viewed_prev2').length) {
          var prev = $('.bbb_viewed_prev2');
          prev.on('click', function() {
            viewedSlider.trigger('prev.owl.carousel');
          });
        }
        if ($('.bbb_viewed_next2').length) {
          var next = $('.bbb_viewed_next2');
          next.on('click', function() {
            viewedSlider.trigger('next.owl.carousel');
          });
        }
      }
      if ($('.products-boxes').length) {
        var viewedSlider = $('.products-boxes');
        viewedSlider.owlCarousel({
          loop: true,
          margin: 15,
          autoplay: true,
          autoplayTimeout: 6000,
          nav: false,
          dots: false,
          responsive: {
            1280: {
              items: 3
            },
            0: {
              items: 2
            },
            991: {
              items: 2
            },
            480: {
              items: 1
            },
            360: {
              items: 1
            },
            320: {
              items: 1
            }
          }
        });
        if ($('.bbb_viewed_prev3').length) {
          var prev = $('.bbb_viewed_prev3');
          prev.on('click', function() {
            viewedSlider.trigger('prev.owl.carousel');
          });
        }
        if ($('.bbb_viewed_next3').length) {
          var next = $('.bbb_viewed_next3');
          next.on('click', function() {
            viewedSlider.trigger('next.owl.carousel');
          });
        }
      }
      if ($('.feature-boxes').length) {
        var viewedSlider = $('.feature-boxes');
        viewedSlider.owlCarousel({
          items: 3,
          loop: true,
          dots: false,
          margin: 5,
          autoplay: false,
          nav: true,
          slideTransition: 'linear',
          autoplayTimeout: 0,
          URLhashListener: false,
          autoplaySpeed: 7000,
          autoplayHoverPause: true,
          responsive: {
            // breakpoint from 0 up
            1280: {
              items: 2
            },
            0: {
              items: 1
            },
            991: {
              items: 1
            },
            480: {
              items: 1
            },
            360: {
              items: 1
            },
            320: {
              items: 1
            }
          }
        });
        $(".owl-prev").html('<i class="fa fa-angle-double-left"></i>');
        $(".owl-next").html('<i class="fa fa-angle-double-right"></i>');
      }
      if ($('.logo-boxes').length) {
        var viewedSlider = $('.logo-boxes');
        viewedSlider.owlCarousel({
          items: 3,
          loop: true,
          dots: false,
          autoplay: true,
          slideTransition: 'linear',
          autoplayTimeout: 0,
          URLhashListener: false,
          autoplaySpeed: 7000,
          autoplayHoverPause: true,
          responsive: {
            // breakpoint from 0 up
            1280: {
              items: 4
            },
            0: {
              items: 1
            },
            991: {
              items: 2
            },
            480: {
              items: 2
            },
            360: {
              items: 1
            },
            320: {
              items: 1
            }
          }
        });
      }
    });
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      new WOW().init();
    });
  </script>
  <script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
      if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
      }
      var $subMenu = $(this).next('.dropdown-menu');
      $subMenu.toggleClass('show');


      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass('show');
      });


      return false;
    });
  </script>

  @yield('script')
</body>

</html>