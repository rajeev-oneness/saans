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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                 Principals
                                    </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
            @foreach($principals as $principal)
            <ul>
              <a class="dropdown-item" href="{{ route('front.principal.product', ["id"=> $principal->id] ) }}" >{{$principal->name}}</a>
            </ul>
            @endforeach
          </div>
        </li>
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
        
            
            <li class="nav-item"> <a class="nav-link" href="{{ url('/contact')}}">Contact</a> </li>
            <li class="nav-item"> <a class="btn btn-read" href="{{url('login')}}">Login</a> </li>
          </ul>
    </div>
  </dvi>
</nav>
  </header>
  