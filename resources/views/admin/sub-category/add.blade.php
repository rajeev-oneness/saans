@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub-Category Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub-Category Add</li>
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
        <form action="{{ route('add.sub-category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Sub-Category</h3>

                       <!--  <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div> -->
                         <div class="card-tools">
                            <a class="headerbuttonforAdd addBlogCategory" href="{{route('sub-category.view')}}">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                    </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="sub_category_name">Sub-Category</label>
                                <input type="text" id="sub_category_name" name="sub_category_name" class="form-control @error('sub_category_name') is-invalid @enderror" placeholder="Sub-Category">
                                @error('sub_category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror         
                            </div>
                            <div class="form-group">
                                <label for="principalId">Category</label>
                                <select class="form-control @error('categoryId') is-invalid @enderror" name="categoryId" id="categoryId" value="{{ old('categoryId') }}">
                                <option selected disabled>Select one</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                </select>
                                @error('categoryId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="col-12">
                              <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                               <button type="submit"  class="btn btn-success float-right">Add</button>
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

@endsection




















