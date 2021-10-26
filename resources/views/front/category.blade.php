@extends('front.layouts.master')
@section('content')
  <section id="product-slider">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-8">
          <div class="sub-heading wow fadeInDown" data-wow-duration="2s">
            <h4>Product Categories</h4>
            <h2><span>Innovation and Implementing Advanced Technology</span></h2> </div>
        </div>
      </div>
    </div>
  </section>
  <section class="category-list">
      <div class="container">
          <div class="row justify-content-center">
              @foreach($categories as $category)
                <div class="col-lg-4 mb-3">
                    <div class="card product-card d-flex flex-column justify-content-center align-items-center">
                            <h6>{{$category->name}}</h6>
                            <a href="{{ route('front.category.product', ["id"=> $category->id] ) }}" class="btn btn-read">View All</a>
                    </div>
                </div>
                @endforeach
          </div>
      </div>
  </section>
  <!-- newsletter part end -->
  
  @endsection
 