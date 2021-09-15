@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
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
        <h3 class="card-title">Category</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogCategory" href="{{ url('admin/category/add') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>Add
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
      </div>
      @if (Session::get('success'))                        
            <div class="alert alert-success"> {{Session::get('success')}} </div>
        @endif
      <div class="card-body p-0">
        <table  id="example4" class="table table-striped projects">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$category->name}}</td>
                    @if($category->status == 1)
                    <td>Active</td>
                    @else
                    <td>Inactive</td>
                    @endif
                    <td><a href="{{route('edit.category',['id' => $category->id])}}">Edit</a> | <a href="{{ route('delete.category', ['id' => $category->id]) }}" class="text-danger delete-confirm">Delete</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @section('script')
<!--   <script type="text/javascript">
      $(document).ready(function() {
          $('#example4').DataTable();
      });
      $('.delete-confirm').on('click', function (event) {
          event.preventDefault();
          const url = "category/delete/";
          const id = $(this).data('id');
          swal({
              title: 'Are you sure?',
              text: 'This record will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
              }).then(function(value) {
              if (value) {
                  swal("Deleted!", "Successful!", "success");
                  window.location.href = url + id;
                  }
              });
          });
  </script> -->
@stop
@endsection