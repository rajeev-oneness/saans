@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Company Edit</h1>
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
              <h3 class="card-title">About Company</h3>
            <div class="card-tools">
                <a class="headerbuttonforAdd addBlogCategory" href="{{route('about.company.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
             <div class="card-body">
                     <form method="POST" action="{{ route('update.about.company', ['id' => $aboutCompany->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                            <label for="image" class="control-label">Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{$aboutCompany->image}}" id="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="ckeditor form-control @error('content') is-invalid @enderror" style="min-height: 100px;max-height: 300px" placeholder="Content">{{$aboutCompany->content}}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                        </div>
                        <div class="form-group required">
                            <label for="extra_info" class="control-label">Extra Info</label>
                            <input class="form-control @error('extra_info') is-invalid @enderror" name="extra_info" id="extra_info" rows="3" value="{{$aboutCompany->extra_info}}" placeholder="Extra Info">
                            @error('extra_info')
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
