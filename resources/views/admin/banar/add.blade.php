@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Banner Add</li>
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
        <form action="{{ route('store.banar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Banner</h3>

                   <!--  <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div> -->
                     <div class="card-tools">
                        <a class="headerbuttonforAdd addBlogBanar" href="{{route('banar.view')}}">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  placeholder="Title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="sub_title">Sub Title</label>
                        <input id="sub_title" type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{ old('sub_title') }}"  >
                        @error('sub_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>      
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  >
                        @error('image')
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
                <button type="submit"  class="btn btn-success float-right">Create New Banner</button>
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