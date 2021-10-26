<?php
   $contacts=App\Models\ContactUs::where('type' ,'0')->where('key','other')->latest()->get();
  //  dd($contacts);exit;
   $mainContacts = $contacts->first();
  //  dd($mainContacts);exit;
   
?>
<section class="bluebox">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-lg-7 col-sm-12" data-wow-duration="2s">
          <div class="sign-up-text mt-3">
            <h5>KNOW IT ALL FIRST!</h5>
            <h3>Never Miss Anything By Signing Up To Our Newsletter.</h3> </div>
        </div>
        <div class="col-lg-5 col-sm-12 wow slideInRight" data-wow-duration="2s">
          <form action="{{ route('front.news-letter') }}" method="POST">
            @csrf
            <div class="input-group">
              <input type="email" name="email" class="form-control" placeholder="Enter your email"> <span class="input-group-btn">
                                    <button class="btn" type="submit">Subscribe</button>
                                </span> </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-6" data-wow-duration="2s">
          <p class="footer-heading">Quick links</p> <span class="animate-border border-black"></span>
          <ul class="footer-list">
            <li><a href="{{ url('about-us') }}">About Us</a></li>
            <li><a href="{{ url('category') }}">  Products</a></li>
            <li><a href="{{ url('login') }}">  My Account</a></li>
            <li><a href="{{ url('contact') }}">  Contact Us</a></li>
          </ul>
          
        </div>
        <div class="col-lg-4 col-sm-6" data-wow-duration="2s">
          <p class="footer-heading">Address</p> <span class="animate-border border-black"></span>
          <ul class="footer-address">
            <li><span><i class="fa fa-map-marker"></i></span>1417, Rajdanga Main Road Block EF-40, Kolkata 700107, West Bengal, India</li>
            <li><span><i class="fa fa-phone"></i></span><a href="tel:+91 3340001735" class="phone">+91 3340001735</a></li>
           
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6" data-wow-duration="2s">
          <p class="footer-heading">Mail </p> <span class="animate-border border-black"></span>
          <ul class="footer-list">
          <li><span><i class="fa fa-envelope"></i></span><a href="mailto:sales@saansanalytical.com">sales@saansanalytical.com</a> </li>
            <li><span><i class="fa fa-envelope"></i></span><a href="mailto:support@saansanalytical.com">support@saansanalytical.com</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6" data-wow-duration="2s">
          <p class="footer-heading">Social Media</p> <span class="animate-border border-black"></span>
          </br>
          <ul class="social">
            <li><a href="{{$mainContacts->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{$mainContacts->twiter_link}}"><i class="fa fa-twitter"></i></a></li>
            <li><a href="{{$mainContacts->google_link}}"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="{{$mainContacts->blog_link}}"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
        <!--      <div class="col-lg-3 col-sm-6">           
               <p class="footer-heading">Life Science</p>
             <ul class="footer-list">
             <li><a class="#">Optical Microscope</a></li>
             <li><a class="#">UV VIS Spectrophotometer</a></li>
             <li><a class="#">Centrifuge</a></li>
             <li><a class="#">Weighing Balance</a></li>
             <li><a class="#">Moisture Analysis</a></li>
            </ul>             
         </div> --></div>
    </div>
  </section>
<div id="bottom-footer">
    <div class="container">
      <div class="d-sm-flex justify-content-between align-items-center">
        <p>Copyright © 2021 All Rights Reserved </p>
        <p>Design &amp; Developed By <a href="#" target="_blank">Oneness Tech Solution</a></p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>
<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
  $('.dropdown-menu a').click(function(e){
  e.preventDefault();
        if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
        }
        $('.dropdown').on('hide.bs.dropdown', function () {
   $(this).find('.submenu').hide();
			})
  });
	}
	
}); // jquery end
</script>