@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Video Link</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Video Link</li>
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
        <h3 class="card-title">Video Link</h3>

        <div class="card-tools">
          <a class="headerbuttonforAdd addBlogCategory" href="{{ url('admin/video/add') }}">
            <i class="fa fa-plus" aria-hidden="true"></i>Add
          </a>
          <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button> -->
          <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button> -->
        </div>
      </div>
      @if (Session::get('success'))
      <div class="alert alert-success"> {{Session::get('success')}} </div>
      @endif
      <div class="card-body p-0">
        <table id="example4" class="table table-striped projects">
          <thead>
            <tr>
              <th>No.</th>
              <th>Video Link</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($videos as $key => $video)
            <tr>
              <td>{{$key + 1}}</td>
              <td>{{$video->video_link}}</td>
              @if($video->status == 1)
              <td>Active</td>
              @else
              <td>Inactive</td>
              @endif
              <td><a href="{{route('edit.video',['id' => $video->id])}}">Edit</a> | <a href="{{ route('delete.video', ['id' => $video->id]) }}" class="text-danger delete-confirm">Delete</a></td>
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
@stop
@endsection