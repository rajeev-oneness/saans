@extends('front.layouts.master')
@section('content')
<section id="contactPageForm">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="contact-form-content">
               <div class="heading wow fadeInDown">
                  <h4>Get In Touch</h4>
                  <h1>Leave <span> us your info</span></h1>
               </div>
               <p>Find out how we can serve you! Call +91 3340001735 or request a free consultation now.</p>
                <div class="form">
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <input type="text" class="form-control inputtext" placeholder="Name"> 
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <input type="text" class="form-control inputtext" placeholder="Email"> 
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <input type="text" class="form-control inputtext" placeholder="Phone"> 
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-12">
                 <textarea type="text" class="form-control" rows="5" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="form-row">                
                <div class="form-group col-lg-12 text-center"> <a href="about.html" class="btn btn-read btn-block">Submit Now</a> </div>
              </div>            
          </div>  

           <div class="single-contact-info bg-light p-3 mt-3">                
                  <h4>Email Us</h4>                 
                  <!-- <p><a href="#">sales@saansanalytical.com</a> / <a href="#">support@saansanalytical.com</a></p> -->
                  <p><a href="#">{{$mainContacts->email_us}}</a> </p>
                  <!-- / <a href="#">support@saansanalytical.com</a></p> -->
               </div>
               <!-- /.single-contact-info -->
                         </div>
         </div>
         <div class="col-lg-4">
             <div class="sub-heading wow fadeInDown">
                  <h2><span>Location</span></h2>
               </div>
            <div class="contact-info">
              @foreach($contacts as $contact)
               <div class="single-contact-info bg-light p-3 mb-3">
                  <h4>{{$contact->office_type}}</h4>                 
                  <!-- <p>1417, Rajdanga Main Road Block EF-40, Kolkata 700107, West Bengal, India</p> -->
                  <p>{{$contact->address}}</p>
                  <h6>Phone / fax</h6>                 
                  <p><a href="#">+91 {{$contact->phone}}</a></p>
               </div>
               @endforeach
             <!--   <div class="single-contact-info bg-light p-3 mb-3">
                  <h4>Head office</h4>                 
                  <p>Flat 2A, Block B, santosh chember Rajarhat Newtown, Kolkata 700157 West Bengal, India</p>
                  <h6>Phone</h6>                 
                  <p><a href="#">+91 8479904266</a></p>
               </div>
               <div class="single-contact-info bg-light p-3 mb-3">
                  <h4>Mumbai Office (West Region)</h4>                 
                  <p>204, B wings, Ventana, The Walk Hiranandani Estate, Thane 400607 Mumbai, Maharashtra, India</p>
               </div> --> 
               <div class="single-contact-info">
                  <h5>Follow Us</h5>
                   <ul class="social">
                    <li><a href="{{$contact->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$contact->twiter_link}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$contact->google_link}}"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="{{$contact->blog_link}}"><i class="fa fa-rss"></i></a></li>
                    </ul>
               </div>              
               <!-- /.single-contact-info -->
            </div>
            <!-- /.contact-info -->
         </div>
         <!-- /.col-md-4 -->
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