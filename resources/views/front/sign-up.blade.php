@extends('front.layouts.master')
@section('content')
<section id="contactPageForm">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
              <div class="contact-form-content">
                
                <div class="heading wow fadeInDown">
                    <!-- <h4>Get In Touch</h4> -->
                    <h1 class="text-center"> <span>Sign-Up Here</span></h1>
                </div>
                  <!-- <p>Find out how we can serve you! Call +91 3340001735 or request a free consultation now.</p> -->
                  
                  <div class="form box-shado">
                  <form action="{{ route('add.contact.report') }}" method="post">
                    @csrf
                    @method('POST')
                      <div class="form-row">
                      <label for="sub_title">Company Name</label>
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="company_name" placeholder="Company Name"> 
                        </div>
                      </div>
                      <div class="form-row">
                      <label for="sub_title">Name</label>
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="name" placeholder="Name"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="email" placeholder="Email"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="phone" placeholder="Phone"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="address" placeholder="Address"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="serial_no" placeholder="Serial Number"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="installed_system" placeholder="Installed System"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="warranty" placeholder="warranty"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="amc_offer_sent" placeholder="AMC Offer Sent?"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="amc_value" placeholder="AMC Value?"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="remarks" placeholder="Remarks"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="action_plan" placeholder="Action Plan"> 
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input type="text" class="form-control inputtext" name="concern_engineer" placeholder="Concern Engineer"> 
                        </div>
                      </div>
                      <div class="form-row">  
                        <button type="submit"  class="contact-btn btn btn-primary form-group col-lg-12 text-center"> Submit Now </button>              
                        <!-- <div class="form-group col-lg-12 text-center"> <a href="about.html" class="btn btn-read btn-block">Submit Now</a> </div> -->
                      </div> 
                    </form>            
                </div>  

                  
                <!-- /.single-contact-info -->
              </div>
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