@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video Edit</h1>
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
                <h3 class="card-title">Video</h3>

                  <div class="card-tools">
                    <a class="headerbuttonforAdd addBlogVideo" href="{{route('video.view')}}">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                            </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('update.video', ['id' => $video->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group required">
                      <label for="video_link" class="control-label">Video Link</label>
                      <input type="text" class="form-control @error('video_link') is-invalid @enderror" name="video_link" value="{{$video->video_link}}" id="name"  placeholder="Video Link name">
                      @error('video_link')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror 
                    </div>
                    <button type="submit" class="btn btn-primary">Update Video Link</button>
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
    content:"*";
    color:red;
 }
</style>
@endsection
