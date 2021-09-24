@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us Edit</h1>
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
              <h3 class="card-title">About Us</h3>
            <div class="card-tools">
                <a class="headerbuttonforAdd addBlogCategory" href="{{route('about_us.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
             <div class="card-body">
                     <form method="POST" action="{{ route('update.about_us', ['id' => $aboutus->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                            <label for="main_baner" class="control-label">Main Baner</label>
                            <input type="file" class="form-control-file @error('main_baner') is-invalid @enderror" name="main_baner" value="{{$aboutus->main_baner}}" id="main_baner">
                            @error('main_baner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>
                        <div class="form-group required">
                            <label for="image1" class="control-label">Image One</label>
                            <input type="file" class="form-control-file @error('image1') is-invalid @enderror" name="image1" value="{{$aboutus->image1}}" id="image1">
                            @error('image1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>
                        <div class="form-group required">
                            <label for="image2" class="control-label">Image Two</label>
                            <input type="file" class="form-control-file @error('image2') is-invalid @enderror" name="image2" value="{{$aboutus->image2}}" id="image2">
                            @error('image2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>

                        <div class="form-group">
                            <label for="content">Content One</label>
                            <textarea name="content1" id="content1" class="form-control @error('content1') is-invalid @enderror" style="min-height: 100px;max-height: 300px" placeholder="Content">{{$aboutus->content1}}</textarea>
                            @error('content1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                        </div>
                        <div class="form-group">
                            <label for="content2">Content Two</label>
                            <textarea name="content2" id="content2" class="form-control @error('content2') is-invalid @enderror" style="min-height: 100px;max-height: 300px" placeholder="Content">{{$aboutus->content2}}</textarea>
                            @error('content1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                        </div>
                        <div class="form-group required">
                            <label for="experience" class="control-label">Experience</label>
                            <input class="form-control @error('experience') is-invalid @enderror" name="experience" id="extra_info" rows="3" value="{{$aboutus->experience}}" placeholder="Experience">
                            @error('experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group required">
                            <label for="winning_awards" class="control-label">Winning Awards </label>
                            <input class="form-control @error('winning_awards') is-invalid @enderror" name="winning_awards" id="winning_awards" rows="3" value="{{$aboutus->winning_awards }}" placeholder="Winning Awards ">
                            @error('winning_awards')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary">Update About Company</button>
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
