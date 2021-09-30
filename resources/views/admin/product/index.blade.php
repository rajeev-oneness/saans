@extends('layouts.dashboard.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Product</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogCategory" href="{{ url('admin/product/add') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>Add
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::get('success'))                        
                            <div class="alert alert-success"> {{Session::get('success')}} </div>
                        @endif
                       <table id="example4" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Feature</th>
                                    <th>Larger Specification</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td><img src="{{asset($product->image1)}}" width="60" /></td>
                                    <td><img src="{{asset($product->image2)}}" width="60" /></td>
                                    <td><img src="{{asset($product->image3)}}" width="60" /></td>
                                    <td><img src="{{asset($product->image4)}}" width="60" /></td>
                                    <td><img src="{{asset($product->image5)}}" width="60" /></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->categoryDetail->name}}</td>
                                    <td>{{$product->subCategoryDetail->sub_category_name}}</td>
                                    <td>{{$product->feature}}</td>
                                    <td>{{$product->larger_specification}}</td>
                                    @if($product->status==1)
                                    <td>Active</td>
                                    @else
                                    <td>Inactive</td>
                                    @endif
                                    <td><a href="{{route('edit.product',['id' => $product->id])}}">Edit</a> | <a href="{{ route('delete.product', ['id' => $product->id]) }}" class="text-danger delete-confirm">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @section('script')

@stop
@endsection