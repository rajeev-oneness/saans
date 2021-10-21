@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub-Principal Edit</h1>
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
              <h3 class="card-title">Sub-Principal</h3>

              <div class="card-tools">
                <a class="headerbuttonforAdd addBlogSubPrincipal" href="{{route('sub-principal.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
             <div class="card-body">
                       <form method="POST" action="{{ route('update.sub-principal', ['id' => $subPrincipal->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                          <label for="sub_principal"class="control-label">Sub-Principal</label>
                          <input type="text" class="form-control @error('sub_principal') is-invalid @enderror" name="sub_principal" id="sub_principal" value="{{$subPrincipal->sub_principal}}"  placeholder="Sub-Principal">
                          @error('sub_principal')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror 
                        </div>
                         <div class="form-group required">
                            <label for="principal" class="control-label">Select Principal</label>
                            <select class="form-control @error('principalId') is-invalid @enderror" id="principalId" name="principalId">
                            <option selected disabled>Select one</option>
                                @foreach ($principals as $principal)
                                    <option value="{{$principal->id}}"  @if($subPrincipal->principalId == $principal->id){{('selected')}}@endif>{{$principal->name}}</option>
                                @endforeach
                            </select>
                            @error('principalId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
    content:"*";
    color:red;
 }
</style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('form').submit(function(){
                $(this).find('button[type=submit]').prop('disabled', true);
            });
        });
    </script>
@endsection
