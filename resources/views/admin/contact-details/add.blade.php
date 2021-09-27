@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Details Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact Details Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if (Session::get('success'))                        
            <div class="alert alert-success"> {{Session::get('success')}} </div>
        @endif
        <form action="{{ route('add.contact.details.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Contact Details</h3>

                   <!--  <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div> -->
                     <div class="card-tools">
                        <a class="headerbuttonforAdd addBlogLocation" href="{{route('contact.details.view')}}">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label for="banar">Banar</label>
                        <input id="banar" type="file" class="form-control @error('banar') is-invalid @enderror" name="banar" value="{{ old('banar') }}"  placeholder="Banar">
                        @error('banar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="office_type">Office Type</label>
                        <input id="office_type" type="text" class="form-control @error('office_type') is-invalid @enderror" name="office_type" value="{{ old('office_type') }}"  placeholder="Office Type">
                        @error('office_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" >
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>          
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone" >
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="blog_link">Blog Link</label>
                        <input id="blog_link" type="text" class="form-control @error('blog_link') is-invalid @enderror" name="blog_link" value="{{ old('blog_link') }}" placeholder="Blog Link" >
                        @error('blog_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="google_link">Google Link</label>
                        <input id="google_link" type="text" class="form-control @error('google_link') is-invalid @enderror" name="google_link" value="{{ old('google_link') }}" placeholder="Google Link" >
                        @error('google_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="facebook_link">Facebook Link</label>
                        <input id="facebook_link" type="text" class="form-control @error('facebook_link') is-invalid @enderror" name="facebook_link" value="{{ old('facebook_link') }}" placeholder="Facebook Link" >
                        @error('facebook_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="twiter_link">Twiter Link</label>
                        <input id="twiter_link" type="text" class="form-control @error('twiter_link') is-invalid @enderror" name="twiter_link" value="{{ old('twiter_link') }}" placeholder="Twiter Link" >
                        @error('twiter_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <button type="submit"  class="btn btn-success float-right">Create New Contact Details</button>
                </div>
            </div>
            </div>
        </form>    
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('form').submit(function(){
                $(this).find('button[type=submit]').prop('disabled', true);
            });
        });
    </script>
@endsection