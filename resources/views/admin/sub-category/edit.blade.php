@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sub-Category Edit</h1>
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
            <h3 class="card-title">Sub-Category</h3>

            <div class="card-tools">
              <a class="headerbuttonforAdd addBlogCategory" href="{{route('sub-category.view')}}">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
              </a>
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('update.sub-category', ['id' => $subCategory->id]) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group required">
                <label for="sub_category_name" class="control-label">Sub-Category</label>
                <input type="text" class="form-control @error('sub_category_name') is-invalid @enderror" name="sub_category_name" id="sub_category_name" value="{{$subCategory->sub_category_name}}" placeholder="Sub-Category">
                @error('sub_category_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group required">
                <label for="principal" class="control-label">Select Category</label>
                <select class="form-control @error('categoryId') is-invalid @enderror" id="categoryId" name="categoryId">
                  <option selected disabled>Select one</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}" @if($subCategory->categoryId == $category->id){{('selected')}}@endif>{{$category->name}}</option>
                  @endforeach
                </select>
                @error('categoryId')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-success float-right">Update Sub-Category</button>
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
    content: "*";
    color: red;
  }
</style>
@endsection
@section('script')
<script>
  $(document).ready(function() {
    $('form').submit(function() {
      $(this).find('button[type=submit]').prop('disabled', true);
    });
  });
</script>
@endsection