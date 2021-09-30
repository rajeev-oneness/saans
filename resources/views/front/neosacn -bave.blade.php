@extends('front.layouts.master')
@section('content')
<section id="">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading text-center">
               <h1>Neosacn<span>Bave</span></h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">      
        <div class="col-md-4 col-sm-6">
            <div class="box-principal">
                <div class="box-img">
                  <img class="pic-1 img-fluid" src="images/n60_banner1.jpg">
              </div>
              <h4>NEOSCAN N60</h4>
              <p>Compact, accessible micro-CT scanner</p>
              <a class="btn btn-read" href="#">View Details</a>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="box-principal">
                <div class="box-img">
                  <img class="pic-1 img-fluid" src="images/thermal-stage.jpg">
              </div>
              <h4>THERMAL STAGE</h4>
              <p>Cooling and heating in a wide temperature range for large object volumes</p>
              <a class="btn btn-read" href="#">View Details</a>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="box-principal">
                <div class="box-img">
                  <img class="pic-1 img-fluid" src="images/CTS_banner.jpg">
              </div>
              <h4>COMPRESSION/TENSILE STAGE</h4>
              <p>In-situ scanning under high forces</p>
              <a class="btn btn-read" href="#">View Details</a>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="box-principal">
                <div class="box-img">
                  <img class="pic-1 img-fluid" src="images/SW1b.jpg">
              </div>
              <h4>NEOSCAN SOFTWARE</h4>
              <p>Neoscan microCT systems are supplied with an in-house developed all-in-one software tool</p>
              <a class="btn btn-read" href="#">View Details</a>
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