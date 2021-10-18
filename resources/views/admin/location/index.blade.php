@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Location</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Location</li>
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
        <h3 class="card-title">Location</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogManar" href="{{ url('admin/location/add') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>Add
            </a>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
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
                                    <th>Office Type</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $key => $location)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$location->office_type}}</td>
                                    <td>{{$location->address}}</td>
                                    <td>{{$location->phone}}</td>
                                    @if($location->status==1)
                                    <td>Active</td>
                                    @else
                                    <td>Inactive</td>
                                    @endif
                                    <td><a href="{{route('edit.location',['id' => $location->id])}}">Edit</a> |  <a href="{{ route('delete.location', ['id' => $location->id]) }}" class="text-danger delete-confirm">Delete</a></td>
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