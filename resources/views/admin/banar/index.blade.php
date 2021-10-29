@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Banner</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Banner</li>
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
        <h3 class="card-title">Banner</h3>

        <div class="card-tools">
          <a class="headerbuttonforAdd addBlogbanar" href="{{ url('admin/banner/add') }}">
            <i class="fa fa-plus" aria-hidden="true"></i>Add
          </a>
          <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button> -->
          <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button> -->
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
                <th>Title</th>
                <th>Sub Title</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($banars as $key => $banar)
              <tr>
                <td>{{$key + 1}}</td>
                <td><img src="{{asset($banar->image)}}" width="60" /></td>
                <td>{{$banar->title}}</td>
                <td>{{$banar->sub_title}}</td>
                @if($banar->status==1)
                <td>Active</td>
                @else
                <td>Inactive</td>
                @endif
                <td><a href="{{route('edit.banar',['id' => $banar->id])}}">Edit</a> | <a href="{{ route('delete.banar', ['id' => $banar->id]) }}" class="text-danger delete-confirm">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div>
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