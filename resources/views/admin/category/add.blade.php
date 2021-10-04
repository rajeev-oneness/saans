@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Add</li>
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
        <form action="{{ route('store.category') }}" method="POST">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Categories</h3>

                    <div class="card-tools">
                        <a class="headerbuttonforAdd addBlogCategory" href="{{route('category.view')}}">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Category Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <button type="submit"  class="btn btn-success float-right">Create new Category</button>
                        </div>
                    </div>
                    </div>


                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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