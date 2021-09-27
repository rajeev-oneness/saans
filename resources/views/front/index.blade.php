 
@extends('front.layouts.master')


@section('content')
 <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s">
          <div class="about-box">
            <p><span>06+</span>
              <br/>YEARS OF WORKING EXPERIENCE IN THIS FIELD</p>
          </div>
          <div class="about-img"> <img src="{{ asset('front/images/about.png') }}" class="img-fluid mx-auto"> </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="2s">
          <div class="heading">
            <h4>ABOUT OUR COMPANY<span><img src="{{ asset('front/images/icon.png') }}" class="img-fluid"></span></h4> </div>
            <!-- <h1>Welcome to <span>SAANS Analytical instruments pvt. ltd.</span></h1> </div>
          <p>Sophisticated Analysis for the Application of Natural Science(SAANS) 
            Analytical Instruments is incorporated with highly skilled professionals in the f
            ield of Analytical research, Lifescience and Clinical support. We represent a number of 
             -known foreign principles and Indian Manufactures all over India. We promise our customers 
             for the best after sales support so that our customers can perform an uninterrupted work.</p>
          <p><b>Our core team is formed with highly qualified professionals including M Techs, MBAs and Phd 
            holders to provide consultation in the area of Analytical instrumentation.</b> We have qualified
             Engineers to troubleshoot customer’s equipment issues and provide solution at shortest possible time frame.</p> -->
            
             <div>{!! $aboutCompany->content !!}<div>
          <a href="#" class="btn btn-read">learn more</a>
          
        </div>
      </div>
    </div>
  </section>
  <section id="product-slider">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-8">
          <div class="sub-heading wow fadeInDown" data-wow-duration="2s">
            <h4>Our Products</h4>
            <h2><span>Innovation and Implementing Advanced Technology</span></h2> </div>
        </div>
        <div class="col-sm-4"> <a href="#" class="btn btn-read">View All</a> </div>
      </div>
    </div>
  </section>
  <section id="products">
    <div class="container">
      <div class="row">
        @foreach($categories as $category)
        <div class="col-lg-4 wow fadeInDown" data-wow-duration="2s">
          <div class="pro-box">
            <div class="pro-icon">
              <!-- <i class="fa fa-cog"></i> --><img src="{{ asset('front/images/icon2.png') }}" alt="" class="img-fluid mx-auto d-block w-50"> </div>
            <div class="pro-bg"> </div>
            <div class="pro-box-img"> <img src="{{ asset('front/images/pro1.jpg')}}" alt="" class="img-fluid mx-auto d-block w-75"> </div>
            <div class="bbb_viewed_content text-center">
              <p class="p-name">{{$category->name}}</p>
              <p>Hitachi High Technology has developed a wide range of Scanning electron microscopes including Standard and Variable-Pressure Scanning Electron <a href="#" class=""><i class="fa fa-angle-double-right ml-2"></i></a></p>
            </div>
          </div>
        </div>
        @endforeach
        <!-- <div class="col-lg-4 wow fadeInUp" data-wow-duration="2s">
          <div class="pro-box">
            <div class="pro-bg"> </div>
            <div class="pro-icon"> <img src="images/icon1.png" class="img-fluid mx-auto d-block w-50"> </div>
            <div class="pro-box-img"> <img src="images/pro2.jpg" alt="" class="img-fluid mx-auto d-block w-75"> </div>
            <div class="bbb_viewed_content text-center">
              <p class="p-name">Medical Product</p>
              <p>Hitachi High Technology has developed a wide range of Scanning electron microscopes including Standard and Variable-Pressure Scanning Electron <a href="#" class=""><i class="fa fa-angle-double-right ml-2"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInDown" data-wow-duration="2s">
          <div class="pro-box">
            <div class="pro-bg"> </div>
            <div class="pro-icon"> <img src="images/icon3.png" class="img-fluid mx-auto d-block w-50"> </div>
            <div class="pro-box-img"> <img src="images/pro3.jpg" alt="" class="img-fluid mx-auto d-block w-75"> </div>
            <div class="bbb_viewed_content text-center">
              <p class="p-name">Life Science Product</p>
              <p>Hitachi High Technology has developed a wide range of Scanning electron microscopes including Standard and Variable-Pressure Scanning Electron <a href="#" class=""><i class="fa fa-angle-double-right ml-2"></i></a></p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <section id="">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="owl-carousel owl-theme feature-boxes">
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="{{ asset('front/images/f1.png') }}" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>TM 3030</h4>
                  <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="images/f1.png" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>TM 3030</h4>
                  <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="images/f1.png" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>TM 3030</h4>
                  <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="images/f1.png" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>TM 3030</h4>
                  <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="images/f1.png" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>TM 3030</h4>
                  <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="images/f1.png" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>TM 3030</h4>
                  <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="video">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="sub-heading text-center wow bounce" data-wow-duration="2s">
            <h2><span>HITACHI'S</span> PRODUCTS</h2> </div>
          <div class="bbb_main_container">
            <div class="bbb_viewed_title_container">
              <div class="bbb_viewed_nav_container">
                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fa fa-chevron-left"></i></div>
                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fa fa-chevron-right"></i></div>
              </div>
            </div>
            <div class="bbb_viewed_slider_container">
              <div class="owl-carousel owl-theme bbb_viewed_slider">
                @foreach($videos as $video)
                <div class="owl-item">
                  <iframe width="100%" height="315" src="{{$video->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                @endforeach
              </div>
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
  <section id="logo">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

        
              <div class="owl-carousel owl-theme logo-boxes">
                @foreach($logoes as $logo)
                <div class="owl-item">
                  <div class=""> <img src="{{ asset($logo->logo) }}" alt="" class="img-fluid mx-auto d-block w-75"> </div>
                </div>
                @endforeach
                <!-- <div class="owl-item">
                  <div class=""> <img src="images/logo3.png" alt="" class="img-fluid mx-auto d-block w-75"> </div>
                </div>
                <div class="owl-item">
                  <div class=""> <img src="images/logo4.png" alt="" class="img-fluid mx-auto d-block w-75"> </div>
                </div>
                <div class="owl-item">
                  <div class=""> <img src="images/logo5.png" alt="" class="img-fluid mx-auto d-block w-75"> </div>
                </div>
                <div class="owl-item">
                  <div class=""> <img src="images/logo6.png" alt="" class="img-fluid mx-auto d-block w-75"> </div>
                </div> -->
              </div>
        </div>
      </div>
    </div>
  </section>
  <!-- newsletter part end -->
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