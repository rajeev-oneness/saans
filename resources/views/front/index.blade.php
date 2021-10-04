@extends('front.layouts.master')
@section('content')
  
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-sm-flex flex-sm-wrap flex-lg-nowrap gg align-items-center justify-content-between">
            <div class="left"> 
     <div class="order-div2">
            <div class="px-15">
              <!-- <p class="head">We supply all kind of commonly use<span> biological systems Collection</span> <span class="animate-border border-black"></span></p> -->
              <p class="head"><span>{{$banar->title}}</span> <span class="animate-border border-black"></span></p>
              <!-- <p class="sub-head">Also we are into marketing of all kind of Optical Microscope including Metallurgical, Polarizing, Stereo Zoom, and Spectrophotometer for pharmaceutical industry.</p> <a href="#" class="btn btn-read mt-2">Contact Us<i class="fa fa-arrow-circle-right"></i></a> <a href="#" class="btn btn-read mt-2">Learn more</a> </div> -->
              <p class="sub-head">{{$banar->sub_title}}</p> <a href="#" class="btn btn-read mt-2">Contact Us<i class="fa fa-arrow-circle-right"></i></a> <a href="#" class="btn btn-read mt-2">Learn more</a> </div>
          </div>
  </div>
           <div class="right">
     <div class="banner-img-bg"> <img src="{{ asset($banar->image) }}" class="img-fluid mx-auto clip-polygon" alt="slide"> </div>
  </div>
        </div>
      </div>
      <div class="carousel-item">
    <div class="d-sm-flex flex-sm-wrap flex-lg-nowrap align-items-center justify-content-between">
            <div class="left"> 
     <div class="order-div2">
            <div class="px-15">
              <p class="head">We supply all kind of commonly use<span> biological systems Collection</span> <span class="animate-border border-black"></span></p>
              <p class="sub-head">Also we are into marketing of all kind of Optical Microscope including Metallurgical, Polarizing, Stereo Zoom, and Spectrophotometer for pharmaceutical industry.</p> <a href="#" class="btn btn-read mt-2">Contact Us<i class="fa fa-arrow-circle-right"></i></a> <a href="#" class="btn btn-read mt-2">Learn more</a> </div>
          </div>
  </div>
           <div class="right">
     <div class="banner-img-bg"> <img src="{{ asset('front/images/banner3.jpg') }}" class="img-fluid mx-auto clip-polygon" alt="slide"> </div>
  </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
  </div>
 <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s">
          <div class="about-box">
            <p><span>06+</span>
              <br/>YEARS OF WORKING EXPERIENCE IN THIS FIELD</p>
              <!-- <p>{{$aboutCompany->extra_info}}</p> -->
          </div>
          <div class="about-img"> <img src="{{ asset($aboutCompany->image) }}" class="img-fluid mx-auto"> </div>
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
          <a href="{{ url('/about-us') }}" class="btn btn-read">learn more</a>
          
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
        @foreach($categories_data as $category)
        
        <div class="col-lg-4 wow fadeInDown" data-wow-duration="2s">
          <div class="pro-box">
            <div class="pro-icon">
              <!-- <i class="fa fa-cog"></i> --><img src="{{ asset('front/images/icon2.png') }}" alt="" class="img-fluid mx-auto d-block w-50"> </div>
            <div class="pro-bg"> </div>
            <div class="pro-box-img"> <img src="{{ asset($category->latestProduct->image1) }}" alt="" class="img-fluid mx-auto d-block w-75"> </div>
            <div class="bbb_viewed_content text-center">
              <p class="p-name">{{$category->name}}</p>
              <!-- php
              $category->product = App\Models\Product::where('id', '=', $category->id)->latest()->first();
              endphp -->
              <p>{{$category->latestProduct->description}} <a href="#" class=""><i class="fa fa-angle-double-right ml-2"></i></a></p>
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
            @foreach($products as $product)
            <div class="owl-item">
              <div class="d-sm-flex justify-content-between align-items-center bg-feature">
                <div class="feature-img"> <img src="{{ asset($product->image1) }}" class="img-fluid mx-auto"> </div>
                <div class="feature-text">
                  <h4>{{$product->name}}</h4>
                  <div>{{$product->description}}</div>
                  <!-- <ul>
                    <li>Magnification: 15 to 60,000×(digital zoom: 2×, 4×)</li>
                    <li> Observation condition: 5kV/15kV/EDX</li>
                    <li>Observation mode: Standard mode</li>
                  </ul> -->
                   <a href="#" class=""><i class="fa fa-angle-double-right "></i></a> </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="owl-item">
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
            </div> -->
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
            <h2><span>LATEST</span> VIDEOS</h2> </div>
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
                  <div class=""> <img src="{{ asset($logo->logo) }}" alt="" class="img-fluid mx-auto d-block w-75 logo-slider-img"> </div>
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
  
@endsection