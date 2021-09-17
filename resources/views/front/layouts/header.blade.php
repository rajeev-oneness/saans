@php
$categories = App\Models\Category::get();
$principals = App\Models\Principal::get();
@endphp
<header>
    <nav class="navbar navbar-expand-lg bg-nav">
       <div class="container">
    <a class="navbar-brand" href="index.html"> 
      <img src="{{asset('front/images/logo.png')}}" class="img-fluid"> 
    </a>   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">

       <ul class="navbar-nav ml-auto bg-light m-0 ml-lg-auto p-3 p-lg-0">
        <li class="d-inline d-lg-none">
                <button data-toggle="collapse" data-target="#nav" class="close float-right">&times;</button>
            </li>
            <li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}"><span><i class="fa fa-home"></i></span>Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/about-us')}}">About Us</a> </li>
            <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                 Products
                                    </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- <a href="analytical-products.html" class="dropdown-item">Analytical Products</a>  -->
            <!-- <a href="lif-science.html"  class="dropdown-item">Life science</a>  -->
            <!-- <a href="medical-products.html" class="dropdown-item">Medical Products</a>  -->

            @foreach($categories as $category)
            <ul>
              <a class="dropdown-item" href="{{ route('front.category.product', ["id"=> $category->id] ) }}" >{{$category->name}}</a>
            </ul>

             <!-- <a href="{{ url('product')}}" class="dropdown-item">{{$category->name}}</a>  -->
            @endforeach        
          </div>
        </li> 
            <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                 Principals
                                    </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
            @foreach($principals as $principal)
            <ul>
              <a class="dropdown-item" href="{{ route('front.principal.product', ["id"=> $principal->id] ) }}" >{{$principal->name}}</a>
            </ul>
            @endforeach
            <!-- <a href="hirox.html"  class="dropdown-item"> Hirox</a> 
            <a href="ostec-corporate-group.html" class="dropdown-item">Ostec Corporate Group</a>
            <a href="elemission-inc.html" class="dropdown-item">Elemission Inc.</a> 
            <a href="precisa.html" class="dropdown-item">Precisa</a> 
            <a href="falc-instruments.html" class="dropdown-item">FALC Instruments</a> 
            <a href="ors.html" class="dropdown-item">ORS (Object Research Systems) for Dragonfly Software</a> 
            <a href="mediacy.html" class="dropdown-item">Media Cybernetics, Inc. for Image Pro Software</a>   -->             
          </div>
        </li>
            
            <li class="nav-item"> <a class="nav-link" href="{{ url('/contact')}}">Contact</a> </li>
            <li class="nav-item"> <a class="btn btn-read" href="{{url('login')}}">Login</a> </li>
          </ul>
    </div>
  </dvi>
</nav>
  </header>
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-sm-flex flex-sm-wrap flex-lg-nowrap gg align-items-center justify-content-between">
            <div class="left"> 
     <div class="order-div2">
            <div class="px-15">
              <p class="head">We supply all kind of commonly use<span> biological systems Collection</span> <span class="animate-border border-black"></span></p>
              <p class="sub-head">Also we are into marketing of all kind of Optical Microscope including Metallurgical, Polarizing, Stereo Zoom, and Spectrophotometer for pharmaceutical industry.</p> <a href="#" class="btn btn-read mt-2">Contact Us<i class="fa fa-arrow-circle-right"></i></a> <a href="#" class="btn btn-read mt-2">Learn more</a> </div>
          </div>
  </div>
           <div class="right">
     <div class="banner-img-bg"> <img src="{{ asset('front/images/banner4.jpg') }}" class="img-fluid mx-auto clip-polygon" alt="slide"> </div>
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