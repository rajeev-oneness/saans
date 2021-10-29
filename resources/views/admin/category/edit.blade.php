@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category Edit</h1>
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
            <h3 class="card-title">Category</h3>

            <div class="card-tools">
              <a class="headerbuttonforAdd addBlogCategory" href="{{route('category.view')}}">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
              </a>
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('update.category', ['id' => $category->id]) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group required">
                <label for="name" class="control-label">Category Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$category->name}}" id="name" placeholder="Category name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-success float-right">Update Category</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection
@section('css')
<style>
  .form-group.required .control-label:after {
    content: "*";
    color: red;
  }
</style>
@endsection