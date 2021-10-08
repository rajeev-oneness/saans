@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Add</li>
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
        <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Product</h3>

                       <!--  <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div> -->
                         <div class="card-tools">
                            <a class="headerbuttonforAdd addBlogCategory" href="{{route('product.view')}}">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                    </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror         
                            </div>
                            <div class="form-group">
                                <label for="image1">Image</label>
                                <input type="file" id="image1" name="image1" class="form-control @error('name') is-invalid @enderror">
                                @error('image1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="pdf">PDF</label>
                                <input type="file" id="pdf" name="pdf" class="form-control @error('pdf') is-invalid @enderror">
                                @error('pdf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <!-- <div class="form-group">
                                <label for="image2">Image</label>
                                <input type="file" id="image2" name="image2" class="form-control @error('image2') is-invalid @enderror">
                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="image3">Image</label>
                                <input type="file" id="image3" name="image3" class="form-control @error('image3') is-invalid @enderror">
                                @error('image3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="image4">Image</label>
                                <input type="file" id="image4" name="image4" class="form-control @error('image4') is-invalid @enderror">
                                @error('image4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="image5">Image</label>
                                <input type="file" id="image5" name="image5" class="form-control @error('image5') is-invalid @enderror">
                                @error('image5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div> -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="description" id="description" name="description" class="form-control @error('description') is-invalid @enderror">
                                @error('description')
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
                            <!-- <div class="form-group">
                                <label for="subCategoryId">Sub-Category</label>
                                <select class="form-control @error('subCategoryId') is-invalid @enderror" name="subCategoryId" id="subCategory" value="{{ old('subCategoryId') }}">
                                
                                </select>
                                @error('subCategoryId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div> -->

                            <div class="form-group required">
                                <label for="subCategoryId" class="control-label">Select Sub-Category</label>
                                <select class="form-control @error('subCategoryId') is-invalid @enderror" name="subCategoryId" id="subCategoryId" value="{{ old('subCategoryId') }}">
                                        <option selected disabled>Select one</option>
                                    @foreach ($subCategories as $subCategory)
                                        <option value="{{$subCategory->id}}">{{$subCategory->sub_category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group required">
                                <label for="principalId" class="control-label">Select Principal</label>
                                <select class="form-control @error('principalId') is-invalid @enderror" name="principalId" id="principalId" value="{{ old('principalId') }}" >
                                <option selected disabled>Select one</option>
                                    @foreach ($principals as $principal)
                                        <option value="{{$principal->id}}">{{$principal->name}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="feature">Feature</label>
                                <input type="text" id="feature" name="feature" class="form-control @error('feature') is-invalid @enderror" value="{{ old('feature') }}">
                                @error('feature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="larger_specification">Larger Specification</label>
                                <input type="text" id="larger_specification" name="larger_specification" class="form-control @error('larger_specification') is-invalid @enderror" value="{{ old('larger_specification') }}">
                                @error('larger_specification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="redirect_link">Link</label>
                                <input type="text" id="redirect_link" name="redirect_link" class="form-control @error('redirect_link') is-invalid @enderror" value="{{ old('redirect_link') }}">
                                @error('redirect_link')
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
@section('script')
    <script>
        $(document).ready(function() {
            $('#categoryId').on('change', function () {
                var categoryId = $('#categoryId').val();
                $.ajax({
                    url : "{{route('admin.product.manage.category')}}",
                    type : 'POST',
                    data : {
                        _token : '{{csrf_token()}}',
                        val : categoryId
                    },
                    success: function(result) {
                        var options  = '<option value="" selected="" hidden="">Select Sub-Category</option>';
                        $.each(result.sub,function(key,val){
                            options += '<option value="'+val.id+'">'+val.sub_category_name+'</option>';
                        });
                        $('#subCategoryId').empty().append(options);
                        // $res->success = false;
                    }
                });
            });
      });
      </script>
@stop
@endsection




















