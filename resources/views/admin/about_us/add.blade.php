@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Us Add</li>
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
        <form action="{{ route('store.about_us') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">About Us</h3>

                       <!--  <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div> -->
                         <div class="card-tools">
                            <a class="headerbuttonforAdd addBlogCategory" href="{{route('about_us.view')}}">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                    </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="content1">Content One</label>
                                <textarea name="content1" id="content1" class="ckeditor form-control @error('content1') is-invalid @enderror" value="{{ old('content1') }}" style="min-height: 100px;max-height: 300px" placeholder="Content One"></textarea>
                                @error('content1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror   
                            </div> 
                            <div class="form-group">
                                <label for="content2">Content Two</label>
                                <textarea name="content2" id="content2" class="ckeditor form-control @error('content2') is-invalid @enderror" value="{{ old('content2') }}" style="min-height: 100px;max-height: 300px" placeholder="Content Two"></textarea>
                                @error('content2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror   
                            </div> 
                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" id="experience" name="experience" class="form-control allow_decimal @error('experience') is-invalid @enderror" placeholder="Experience" value="{{old('experience')}}" >
                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="winning_awards">Winning Awards</label>
                                <input type="text" id="winning_awards" name="winning_awards" class="form-control @error('winning_awards') is-invalid @enderror" placeholder="Winning Awards" onkeypress="return onlyNumberKey(event)" value="{{old('winning_awards')}}">
                                @error('winning_awards')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="image1">Image One</label>
                                <input type="file" id="image1" name="image1" class="form-control @error('image1') is-invalid @enderror" value="{{old('image1')}}">
                                @error('image1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="image2">Image Two</label>
                                <input type="file" id="image2" name="image2" class="form-control @error('image2') is-invalid @enderror" value="{{old('image2')}}">
                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="main_banar">Main Banar</label>
                                <input type="file" id="main_banar" name="main_banar" class="form-control @error('main_banar') is-invalid @enderror" value="{{old('main_banar')}}">
                                @error('main_banar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            
                            <div class="col-12">
                              <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                               <button type="submit"  class="btn btn-success float-right">Add New About Us</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
                </div>
            </div>
            <div class="row">
                
            </div>
            </div>
        </form>    
    </section>
    <!-- /.content -->
  </div>
  @section('script')
    <script>

        $(".allow_decimal").on("input", function(evt) {
        var self = $(this);
        self.val(self.val().replace(/[^0-9\.]/g, ''));
        if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
        {
            evt.preventDefault();
        }
        });
        function onlyNumberKey(evt) {
            
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }


        
    </script>
  @stop
  
@endsection




















