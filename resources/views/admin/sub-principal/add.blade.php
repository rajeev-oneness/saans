@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sub-Principal Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Sub-Principal Add</li>
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
    <form action="{{ route('store.sub-principal') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sub-Principal</h3>

                <!--  <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div> -->
                <div class="card-tools">
                  <a class="headerbuttonforAdd addBlogSubPrincipal" href="{{route('sub-principal.view')}}">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                  </a>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="sub_principal">Sub-Principal</label>
                  <input type="text" id="sub_principal" name="sub_principal" class="form-control @error('sub_principal') is-invalid @enderror" placeholder="Sub-Principal">
                  @error('sub_principal')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="principalId">Principal</label>
                  <select class="form-control @error('principalId') is-invalid @enderror" name="principalId" id="principalId" value="{{ old('principalId') }}">
                    <option selected disabled>Select one</option>
                    @foreach($principals as $principal)
                    <option value="{{$principal->id}}">{{$principal->name}}</option>
                    @endforeach
                  </select>
                  @error('principalId')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-12">
                  <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                  <button type="submit" class="btn btn-success float-right">Add New Sub-Principal</button>
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