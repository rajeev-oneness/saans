@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us Edit</h1>
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
              <h3 class="card-title">Contact Us</h3>
            <div class="card-tools">
                <a class="headerbuttonforAdd addBlogContactUs" href="{{route('contact_us.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
             <div class="card-body">
                     <form method="POST" action="{{ route('update.contact_us', ['id' => $contactUs->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                            <label for="name" class="control-label">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" rows="3" value="{{$contactUs->name}}" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                          <label for="email" class="control-label">Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{$contactUs->email}}"  placeholder="Address" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="phone" class="control-label">Phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" rows="3" value="{{$contactUs->phone}}" >
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="message" class="control-label">Message</label>
                            <input class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="3" value="{{$contactUs->message}}" >
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Location</button>
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
