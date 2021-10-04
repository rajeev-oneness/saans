@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Company Manager Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company Manager Add</li>
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
        <form action="{{ route('store.company.manager') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Company Manager</h3>

                    <div class="card-tools">
                        <a class="headerbuttonforAdd addBlogCompanyManager" href="{{route('company.manager.view')}}">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}"  >
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                        </div>
                        <div class="form-group">
                            <label for="redirect_link">Redirect Link</label>
                            <input id="redirect_link" type="text" class="form-control @error('redirect_link') is-invalid @enderror" name="redirect_link" value="{{ old('redirect_link') }}"  >
                            @error('redirect_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <button type="submit"  class="btn btn-success float-right">Create new Company Manager</button>
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