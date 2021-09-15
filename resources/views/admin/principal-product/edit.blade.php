@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Edit</h1>
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
              <h3 class="card-title">Category</h3>
            <div class="card-tools">
                <a class="headerbuttonforAdd addBlogCategory" href="{{route('principal.product.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
             <div class="card-body">
                     <form method="POST" action="{{ route('update.principal.product', ['id' => $PrincipalPro->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                            <label for="image" class="control-label">Image</label>
                            <input type="file" class="form-control-file" name="image" value="{{$PrincipalPro->image}}" id="image">
                        </div>
                        <div class="form-group required">
                          <label for="name" class="control-label">Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{$PrincipalPro->name}}"  placeholder="Course name" required>
                        </div>
                         <div class="form-group required">
                            <label for="principal" class="control-label">Select Principal</label>
                            <select class="form-control" id="principal" name="principalId" required>
                                @foreach ($principals as $principal)
                                    <option value="{{$principal->id}}" {{ $PrincipalPro->id == $PrincipalPro->principalId ? 'selected' : '' }}>{{$principal->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group required">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required>{{$PrincipalPro->description}}</textarea>
                        </div>
                        <div class="form-group required">
                            <label for="redirect_link" class="control-label">Link</label>
                            <input type="text" class="form-control" name="redirect_link" value="{{$PrincipalPro->redirect_link}}" id="duration"  placeholder="Link" required>
                          </div>
                        <button type="submit" class="btn btn-primary">Update Principal Product</button>
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
