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
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$categoryName->name}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section id="">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading text-center">
               <!-- <h1>Analytical<span>Products</span></h1> -->
               <h1>{{$categoryName->name}}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($subCats as $subCat)
            <div class="row">
                <div class="col-lg-12 bg-light p-3 mb-3 mt-3">            
                       <h4>{{$subCat->sub_category_name}}</h4>
                </div>
            </div>
            <div class="row"> 
            <!-- foreach($sub_categories_data as $sub)      -->
            @foreach($subCat->allProductByCat as $dt)    
                <!-- <div class="col-md-3 col-sm-6"> -->
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
                <!-- </div> -->
                @endforeach
            </div>
        </div>
        @endforeach
</div>


@endsection