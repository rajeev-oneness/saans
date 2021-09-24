@extends('front.layouts.master')
@section('content')
<section id="">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading text-center">
               <h1>Analytical<span>Products</span></h1>
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col-lg-12 bg-light p-3 mb-3 mt-3">            
               <h4>Scanning Electron Microscope (Hitachi High Technologies)</h4>
        </div>
    </div>
    <div class="row"> 
    @foreach($data as $dt)     
        <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="{{ asset($dt->image1) }}">
                        <!-- <img class="pic-2 img-fluid" src="images/pro1.jpg"> -->
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">{{$dt->name}}</a></h3>
                    <a class="all-deals" href="{{ route('front.product.details',['id' => $dt->id]) }}">View Details</a>
                </div>

            </div>
        </div>
        @endforeach

         <!-- <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro2.jpg">
                        <img class="pic-2 img-fluid" src="images/pro2.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro1.jpg">
                        <img class="pic-2 img-fluid" src="images/pro1.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro2.jpg">
                        <img class="pic-2 img-fluid" src="images/pro2.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div> -->
    </div>

      <div class="row">
        <div class="col-lg-12 bg-light p-3 mb-3 mt-3">            
               <h4>Universal Testing Machines (Sobre Ibertest)

</h4>
        </div>
    </div>
    <div class="row">      
        <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro1.jpg">
                        <img class="pic-2 img-fluid" src="images/pro1.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro2.jpg">
                        <img class="pic-2 img-fluid" src="images/pro2.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro1.jpg">
                        <img class="pic-2 img-fluid" src="images/pro1.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="product-details.html">
                        <img class="pic-1 img-fluid" src="images/pro2.jpg">
                        <img class="pic-2 img-fluid" src="images/pro2.jpg">
                    </a>
                </div>
                <div class="product-content">    
                    <h3 class="title"><a href="product-details.html">TM 3030</a></h3>
                    <a class="all-deals" href="product-details.html">View Details</a>
                </div>
            </div>
        </div>
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
<section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-6 wow slideInLeft" data-wow-duration="2s">
          <p class="footer-heading">Quick links</p> <span class="animate-border border-black"></span>
          <ul class="footer-list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">  Products</a></li>
            <li><a href="#">  My Account</a></li>
            <li><a href="#">  Contact Us</a></li>
          </ul>
          <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-6 wow slideInRight" data-wow-duration="2s">
          <p class="footer-heading">STORE INFORMATION</p> <span class="animate-border border-black"></span>
          <ul class="footer-address">
            <li><span><i class="fa fa-map-marker"></i></span>1417, Rajdanga Main Road Block EF-40, Kolkata 700107, West Bengal, India</li>
            <li><span><i class="fa fa-phone"></i></span><a href="tel:+91 3340001735" class="phone">+91 3340001735</a></li>
            <li><span><i class="fa fa-envelope"></i></span><a href="">sales@saansanalytical.com</a> </li>
            <li><span><i class="fa fa-envelope"></i></span><a href="">support@saansanalytical.com</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 wow slideInLeft" data-wow-duration="2s">
          <p class="footer-heading">Analytical </p> <span class="animate-border border-black"></span>
          <ul class="footer-list">
            <li><a href="#">Scanning Electron Microscope</a></li>
            <li><a href="#">Universal Testing Machine</a></li>
            <li><a href="#">Fatigue Testing Machine</a></li>
            <li><a href="#">Micro XRF System</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 wow slideInRight" data-wow-duration="2s">
          <p class="footer-heading">Medical</p> <span class="animate-border border-black"></span>
          <ul class="footer-list">
            <li><a href="#">Scanning Electron Microscope</a></li>
            <li><a href="#">Universal Testing Machine</a></li>
            <li><a href="#">Fatigue Testing Machine</a></li>
            <li><a href="#">Micro XRF</a></li>
            <li><a href="#">Atomic Absorption Spectroscopy</a></li>
            <li><a href="#"> Atomic Fluorescence  Spectroscopy</a></li>
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
@endsection