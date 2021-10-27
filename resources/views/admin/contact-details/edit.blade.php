@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Details Edit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Contact Details</h3>
            <div class="card-tools">
                <a class="headerbuttonforAdd addBlogContactDetails" href="{{route('contact.details.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
             <div class="card-body">
                     <form method="POST" action="{{ route('update.contact.details', ['id' => $contactDetails->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                            <label for="babar" class="control-label">Banar</label>
                            <input type="file" class="form-control @error('banar') is-invalid @enderror" name="banar" id="banar" rows="3"  >
                            @error('banar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                          <label for="email" class="control-label">Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="address" value="{{$contactDetails->email}}"  placeholder="Address" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="phone" class="control-label">Phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" rows="3" value="{{$contactDetails->phone}}" >
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="blog_link" class="control-label">Blog Link</label>
                            <input class="form-control @error('blog_link') is-invalid @enderror" name="blog_link" id="phone" rows="3" value="{{$contactDetails->blog_link}}" >
                            @error('blog_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="google_link" class="control-label">Google Link</label>
                            <input class="form-control @error('google_link') is-invalid @enderror" name="google_link" id="google_link" rows="3" value="{{$contactDetails->google_link}}" >
                            @error('google_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="facebook_link" class="control-label">Facebook Link</label>
                            <input class="form-control @error('facebook_link') is-invalid @enderror" name="facebook_link" id="facebook_link" rows="3" value="{{$contactDetails->facebook_link}}" >
                            @error('facebook_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="twiter_link" class="control-label">Twiter Link</label>
                            <input class="form-control @error('twiter_link') is-invalid @enderror" name="twiter_link" id="twiter_link" rows="3" value="{{$contactDetails->twiter_link}}" >
                            @error('twiter_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success float-right">Update Contact Details</button>
                      </form>
                </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    <!--   <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div> -->
    </section>
    <!-- /.content -->
  </div>
@endsection





@section('css')
<style>
    .form-group.required .control-label:after {
    content:"*";
    color:red;
 }
</style>
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
