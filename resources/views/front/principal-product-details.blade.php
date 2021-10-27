@extends('front.layouts.master')
@section('content')
    <section id="">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="heading text-center">
               <h1>{{$principalName->name}}</h1>
               <h2>{{$subPrincipalName->sub_principal}}</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      @foreach($data as $dt)      
        <div class="col-md-4 col-sm-6 mt-3">
            <div class="box-principal">
                <div class="box-img">
                  <img class="pic-1 img-fluid" src="{{ asset($dt->image1) }}">
              </div>
              <div class="box-details">
                <h4>{{$dt->name}}</h4>
                <p>{{$dt->description}}</p>
                <!-- <a class="btn btn-read" target="_blank"  href="{{$dt->redirect_link}}">View Details</a> -->
                <a class="btn btn-read" href="{{ route('front.product.details',['id' => $dt->id]) }}">View Details</a>
              </div>
            </div>
        </div>
        @endforeach  
    </div>
</div>
</section>   


  
@endsection
 