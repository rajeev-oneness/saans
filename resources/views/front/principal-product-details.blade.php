@extends('front.layouts.master')
@section('content')
    <section id="">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading text-center">
               <h1>{{$principalName->name}}</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      @foreach($data as $dt)      
        <div class="col-md-4 col-sm-6">
            <div class="box-principal">
                <div class="box-img">
                  <img class="pic-1 img-fluid" src="{{ asset($dt->image) }}">
              </div>
              <h4>{{$dt->name}}</h4>
              <p>{{$dt->description}}</p>
              <a class="btn btn-read" href="#">View Details</a>
            </div>
        </div>
        @endforeach  
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
@endsection
 