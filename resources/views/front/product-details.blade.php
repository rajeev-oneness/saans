@extends('front.layouts.master')
@section('content')
<section id="cmsbanner">
  <div class="container">
    <div class="inner-caption d-md-block">
      <p class="head">{{$product->subCategoryDetail->sub_category_name}}</p>
    </div>
  </div>
</section>


<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">{{$product->subCategoryDetail->sub_category_name}}</a></li>
          <!-- <li class="breadcrumb-item active" aria-current="page">SU3800/SU3900</li> -->
        </ol>
      </nav>
    </div>
  </div>
</div>


<section>
  <div class="container">
    <div class="row">
      <div class="preview col-lg-6 col-sm-5">
        <div class="card">
          <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img src="{{ asset($product->image1) }}" /></div>
            <!-- <div class="tab-pane" id="pic-2"><img src="{{ asset($product->image2) }}" /></div>
              <div class="tab-pane" id="pic-3"><img src="i{{ asset($product->image3) }}" /></div> -->
          </div>
        </div>

        <!-- <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset($product->image1) }}" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset($product->image2) }}" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset($product->image3) }}" /></a></li>              
            </ul>             -->
      </div>
      <div class="details col-lg-6 col-sm-7">
        <h3 class="product-title">{{$product->name}}</h3>
        <p class="product-description">{{$product->description}}</p>

        <div class="action">
          <a class="btn btn-read mt-2" href="{{ url('/contact') }}">Contact Us</a>
          <a class="btn btn-read mt-2" href="{{asset($product->pdf)}}">Get BROCHURE</a>
        </div>
        <ul class="social mt-3">
          <li><a href="{{$mainContacts->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
          <li><a href="{{$mainContacts->twiter_link}}"><i class="fa fa-twitter"></i></a></li>
          <li><a href="{{$mainContacts->google_link}}"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="{{$mainContacts->blog_link}}"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>


@endsection