@extends('front.layouts.master')
@section('content')

         <div class="container-fluid">
             <div class="row">
                 <img src="{{asset('front/images/about-banner.jpg')}}" class="img-fluid w-100">
             </div>
            </div>
  

   <div class="container mt-5">
     <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
  </ol>
</nav>
        </div>
     </div>
   </div>
<section id="aboutPage">
   <div class="container">
      <div class="d-sm-flex justify-content-between align-items-strech">
          <div class="aboutimg wow fadeInLeft">
             <img src="{{ asset($aboutUs->image1) }}" class="img-fluid mx-auto">
         </div>
         <div class="abouttext wow fadeInRight">
            <!-- <div class="heading">
               <h1><span>Story about our instruments </span></h1>
            </div>
            <p>Sophisticated Analysis for the Application of Natural Science(SAANS)Analytical Instruments is incorporated with highly skilled professionals in the field of Analytical Research, Life Science and Clinical support. We represent a number of well -known foreign principles and Indian Manufactures throughout India. The major products which we have introduced in the market include the first mobile XRF system with PPM level analysis and XRF attachment for Scanning Electron Microscope with PPM level analysis and EDS detector. Also we are into marketing of all kind of Optical Microscope including Metallurgical, Polarizing, Stereo Zoom, and Spectrophotometer for pharmaceutical industry.</p> -->
         {!! $aboutUs->content1 !!}
          </div>        
      </div>        
   </div>
</section>  
<div class="container"id="bg-count">
      <div class="row text-center">
           <div class="col">
           <div class="counter">
      <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
       <p class="count-text ">Happy Clients
</p>
    </div>
           </div>
              <div class="col">
               <div class="counter">
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500">{{$productcount}}</h2>
      <p class="count-text ">Products</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
      <h2 class="timer count-title count-number" data-to="6" data-speed="1500">{{$aboutUs->experience}}</h2>
      <p class="count-text ">Experience</p>
    </div></div>
              <div class="col">
              <div class="counter">
      <h2 class="timer count-title count-number" data-to="80" data-speed="1500">{{$aboutUs->winning_awards}}</h2>
      <p class="count-text ">Winning Awards
</p>
    </div>
              </div>
         </div>
</div>
<section>
    <div class="container">
           <div class="row mt-4">
         <div class="col-lg-7 col-sm-12">
            <!-- <div class="sub-heading wow bounce" data-wow-duration="2s">
               <h2>Keep improving our instruments</h2>
            </div> -->
            
            {!! $aboutUs->content2 !!}
@foreach($categories as $category)
<div class="barWrapper">
 <span class="progressText"><B>{{$category->name}}</B></span>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >   
        <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>     
</div>
</div>
</div>
@endforeach
<!-- 
<div class="barWrapper">
 <span class="progressText"><B>Medical Product</B></span>
<div class="progress ">
  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="10" aria-valuemax="100" style="">
     <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> </span>  
  </div>
  
</div>
</div>

<div class="barWrapper">
 <span class="progressText"><B>Life Science Product</B></span>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
     <span  class="popOver" data-toggle="tooltip" data-placement="top" title="65%"> </span>  
  </div>
</div>
</div> -->
</div>



                 
         <div class="col-lg-5 col-sm-12 wow slideInRight" data-wow-duration="2s"> <img src="{{ asset($aboutUs->image2) }}" class="img-fluid mx-auto d-block"> </div>
      </div>
    </div>
</section>   


  <section class="bluebox">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-lg-7 col-sm-12 wow slideInLeft" data-wow-duration="2s">
          <div class="sign-up-text mt-3">
            <h5>KNOW IT ALL FIRST!</h5>
            <h3>Never Miss Anything By Signing Up To Our Newsletter.</h3> </div>
        </div>
        <div class="col-lg-5 col-sm-12 wow slideInRight" data-wow-duration="2s">
          <form>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Enter your email"> <span class="input-group-btn">
                                    <button class="btn" type="submit">Subscribe</button>
                                </span> </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  @section('script')
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
  (function ($) {
   $.fn.countTo = function (options) {
      options = options || {};
      
      return $(this).each(function () {
         // set options for current element
         var settings = $.extend({}, $.fn.countTo.defaults, {
            from:            $(this).data('from'),
            to:              $(this).data('to'),
            speed:           $(this).data('speed'),
            refreshInterval: $(this).data('refresh-interval'),
            decimals:        $(this).data('decimals')
         }, options);
         
         // how many times to update the value, and how much to increment the value on each update
         var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;
         
         // references & variables that will change with each update
         var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};
         
         $self.data('countTo', data);
         
         // if an existing interval can be found, clear it first
         if (data.interval) {
            clearInterval(data.interval);
         }
         data.interval = setInterval(updateTimer, settings.refreshInterval);
         
         // initialize the element with the starting value
         render(value);
         
         function updateTimer() {
            value += increment;
            loopCount++;
            
            render(value);
            
            if (typeof(settings.onUpdate) == 'function') {
               settings.onUpdate.call(self, value);
            }
            
            if (loopCount >= loops) {
               // remove the interval
               $self.removeData('countTo');
               clearInterval(data.interval);
               value = settings.to;
               
               if (typeof(settings.onComplete) == 'function') {
                  settings.onComplete.call(self, value);
               }
            }
         }
         
         function render(value) {
            var formattedValue = settings.formatter.call(self, value, settings);
            $self.html(formattedValue);
         }
      });
   };
   
   $.fn.countTo.defaults = {
      from: 0,               // the number the element should start at
      to: 0,                 // the number the element should end at
      speed: 1000,           // how long it should take to count between the target numbers
      refreshInterval: 100,  // how often the element should be updated
      decimals: 0,           // the number of decimal places to show
      formatter: formatter,  // handler for formatting the value before rendering
      onUpdate: null,        // callback method for every time the element is updated
      onComplete: null       // callback method for when the element finishes updating
   };
   
   function formatter(value, settings) {
      return value.toFixed(settings.decimals);
   }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
   formatter: function (value, options) {
     return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
   }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
   var $this = $(this);
   options = $.extend({}, options || {}, $this.data('countToOptions') || {});
   $this.countTo(options);
  }
});
  </script>
  <script type="text/javascript">
  $(function () { 
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});  
 
  $(".progress-bar").each(function(){
    each_bar_width = $(this).attr('aria-valuenow');
    $(this).width(each_bar_width + '%');
  });

  </script>
  @stop
 @endsection