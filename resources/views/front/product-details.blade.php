@extends('front.layouts.master')
@section('content')
  <section id="cmsbanner">
    <div class="container">
       <div class="inner-caption d-md-block">
                        <p class="head">Scanning Electron Microscopes</p>       
                    </div>
                </div>
   </section>
  

   <div class="container mt-5">
     <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Scanning Electron Microscopes</a></li>
    <li class="breadcrumb-item active" aria-current="page">SU3800/SU3900</li>
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

 <!-- <div class="container"> -->
  <!-- <div class="row">
    <div class="col-lg-3 col-sm-5 vertical-tabs">
      <ul class="list-tabs vertical-tab-sticky">
        <li class="active">
          <a class=""  href="#pag1">Feature</a>
        </li>
        <li class="">
          <a class="" href="#pag2">Larger Specimen Chamber</a>
        </li>
        <li class="">
          <a class="" href="#pag3">Automatic Functions</a>
        </li>
        <li class="">
          <a class="" href="#pag4">Specification</a>
        </li>

        <li class="">
          <a class="" href="#pag5">Observation of mineral/analysis example</a>
        </li>

        <li class="">
          <a class="" href="#pag6">Applications Gallery</a>
        </li>
      </ul>
    </div>
    <div class="col-lg-9 col-sm-7">
      <div class="tab-content">
        <div class="active" id="pag1">
          <div class="sv-tab-panel">
           <h3 class="product-title">Feature</h3>
            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>{{$product->feature}}</h4>
                   <ul class="tab-point">
                      <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                      <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                      <li>Increase sample manipulation with Stage Free Mode*.</li>
                      <li>The Chamber Scope enhances the safety of stage movements*.</li>
                    </ul>

                      <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                      <li>Integrated in-chamber camera display</li>
                      <li>Easily navigate the entire observable area</li>
                      <li>Detector-oriented rotation</li>
                    </ul>
                </div>
                <div class="">
                    <img src="images/tab-f1.jpg" class="img-fluid">
                </div>
            </div>

            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>Robust Stage for Flexibility in Sample Size, Shape, and Weight</h4>
                   <ul class="tab-point">
                    <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                    <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                    <li>Increase sample manipulation with Stage Free Mode*.</li>
                    <li>The Chamber Scope enhances the safety of stage movements*.</li>
                  </ul>

                    <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                    <li>Integrated in-chamber camera display</li>
                    <li>Easily navigate the entire observable area</li>
                    <li>Detector-oriented rotation</li></ul>
                </div>
                <div class="">
                   <img src="images/tab-f2.jpg" class="img-fluid">
                </div>
            </div>
            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>Robust Stage for Flexibility in Sample Size, Shape, and Weight</h4>
                   <ul class="tab-point">
                    <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                    <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                    <li>Increase sample manipulation with Stage Free Mode*.</li>
                    <li>The Chamber Scope enhances the safety of stage movements*.</li>
                  </ul>

                  <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                    <li>Integrated in-chamber camera display</li>
                    <li>Easily navigate the entire observable area</li>
                    <li>Detector-oriented rotation</li>
                  </ul>
                </div>
                <div class="">
                   <img src="images/tab-f3.jpg" class="img-fluid">
                </div>
            </div>
          </div>
        </div>
        <div class="" id="pag2">
         <div class="sv-tab-panel">
           <h3 class="product-title">Substantially Larger Specimen Chamber 
              Accommodates Oversized and Heavy Samples</h3>
              <h4>{{$product->larger_specification}}</h4>
              <h5>The specimen exchange sequence prevents potential damage to the system or the sample.</h5>
            <div class="d-sm-flex justify-content-between align-items-center flex-sm-wrap flex-lg-nowrap mt-4">
                <div class="tab-text">
                   <p>The procedure for exchanging specimens can be performed by referring to the graphic user interface to avoid the risk of damage due to human error, even with irregular or large samples.</p>
                </div>
                <div class="">
                   <img src="images/pro-4-details.jpg" class="img-fluid">
                </div>
            </div>
              <h5>Specimen Exchange Chamber*</h5>
             <div class="d-sm-flex justify-content-between align-items-center flex-sm-wrap flex-lg-nowrap mt-4">
                <div class="tab-text">
                   <p>Exchange the specimen without venting the specimen chamber, improving throughput.</p>
                </div>
                <div class="">
                   <img src="images/pro-5-details.jpg" class="img-fluid">
                </div>
            </div>
            <h5>Increase sample manipulation with the Stage Movement Restriction Cancellation function*.</h5>
            <div class="d-sm-flex justify-content-between align-items-center flex-sm-wrap flex-lg-nowrap mt-4">
                <div class="tab-text">
                   <p>The SU3800/SU3900 can be configured with the Stage Movement Restriction Cancellation function*, which increases the flexibility of stage movement. The operator can move the stage based on their imaging requirements free of restrictions.Note: When the Stage Movement Restriction Cancellation function is used, caution and the Chamber Scope must be used in order to ensure safe operation.</p>
                </div>
            </div>
          </div>
        </div>
        <div class="" id="pag3">
          <div class="sv-tab-panel">
           <h3 class="product-title">AUTOMATIC FUNCTIONS</h3>
            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>Robust Stage for Flexibility in Sample Size, Shape, and Weight</h4>
                   <ul class="tab-point">
                    <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                    <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                    <li>Increase sample manipulation with Stage Free Mode*.</li>
                    <li>The Chamber Scope enhances the safety of stage movements*.</li>
                  </ul>

                    <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                    <li>Integrated in-chamber camera display</li>
                    <li>Easily navigate the entire observable area</li>
                    <li>Detector-oriented rotation</li></ul>
                </div>
                <div class="">
                   <img src="images/tab-f1.jpg" class="img-fluid">
                </div>
            </div>
          </div>
        </div>
        <div class="hhhh" id="pag4">
          <div class="sv-tab-panel">
            <div class="sv-tab-panel">
           <h3 class="product-title">SPECIFICATION</h3>
            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>Robust Stage for Flexibility in Sample Size, Shape, and Weight</h4>
                   <ul class="tab-point">
                    <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                    <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                    <li>Increase sample manipulation with Stage Free Mode*.</li>
                    <li>The Chamber Scope enhances the safety of stage movements*.</li></ul>

                    <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                    <li>Integrated in-chamber camera display</li>
                    <li>Easily navigate the entire observable area</li>
                    <li>Detector-oriented rotation</li>
                  </ul>
                </div>
                <div class="">
                   <img src="images/tab-f1.jpg" class="img-fluid">
                </div>
            </div>
          </div>
          </div>
        </div>

        <div class="" id="pag5">
          <div class="sv-tab-panel">
              <div class="sv-tab-panel">
           <h3 class="product-title">OBSERVATION OF MINERAL/ANALYSIS EXAMPLE</h3>
            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>Robust Stage for Flexibility in Sample Size, Shape, and Weight</h4>
                   <ul class="tab-point">
                    <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                    <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                    <li>Increase sample manipulation with Stage Free Mode*.</li>
                    <li>The Chamber Scope enhances the safety of stage movements*.</li></ul>

                    <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                    <li>Integrated in-chamber camera display</li>
                    <li>Easily navigate the entire observable area</li>
                    <li>Detector-oriented rotation</li></ul>
                </div>
                <div class="">
                   <img src="images/tab-f1.jpg" class="img-fluid">
                </div>
            </div>
          </div>
          </div>
        </div>

        <div class="" id="pag6">
          <div class="sv-tab-panel">
              <div class="sv-tab-panel">
           <h3 class="product-title">APPLICATIONS GALLERY</h3>
            <div class="d-sm-flex justify-content-between flex-sm-wrap flex-lg-nowrap bg-light p-3 mb-4">
                <div class="tab-text">
                   <h4>Robust Stage for Flexibility in Sample Size, Shape, and Weight</h4>
                   <ul class="tab-point">
                    <li>The specimen exchange sequence prevents potential damage to the system or the sample.</li>
                    <li>Exchange the specimens without venting the specimen chamber, improving throughput.</li>
                    <li>Increase sample manipulation with Stage Free Mode*.</li>
                    <li>The Chamber Scope enhances the safety of stage movements*.</li></ul>

                    <h4>Increased Viewing Area—SEM MAP Expands the Boundaries of Sample Navigation</h4>
                   <ul class="tab-point">
                    <li>Integrated in-chamber camera display</li>
                    <li>Easily navigate the entire observable area</li>
                    <li>Detector-oriented rotation</li></ul>
                </div>
                <div class="">
                   <img src="images/tab-f1.jpg" class="img-fluid">
                </div>
            </div>
          </div>
          </div>
        </div>

      </div>
    </div>
  </div> -->
  <!-- </div> -->




  
  <!-- newsletter part end -->
@endsection