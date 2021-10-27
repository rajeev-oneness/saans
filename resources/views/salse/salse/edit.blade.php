@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Salse Report Edit</h1>
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
                <h3 class="card-title">Salse Report</h3>

                  <div class="card-tools">
                    <a class="headerbuttonforAdd addBlogSalseReport" href="{{route('salse.report.view')}}">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                            </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('update.salse.report', ['id' => $salseReport->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group required">
                      <label for="customer_name" class="control-label">Customer Name</label>
                      <input type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{$salseReport->customer_name}}" id="name"  placeholder="Customer name">
                      @error('customer_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror 
                    </div>
                    <div class="form-group required">
                      <label for="contact_person" class="control-label">Name</label>
                      <input type="text" class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" value="{{$salseReport->contact_person}}" id="name"  placeholder="Name">
                      @error('contact_person')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror 
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{$salseReport->email}}" >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$salseReport->phone}}" >
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="value_inr">Value(INR)</label>
                        <input id="value_inr" type="text" class="form-control @error('value_inr') is-invalid @enderror" name="value_inr" value="{{$salseReport->value_inr}}" >
                        @error('value_inr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{$salseReport->remarks}}" >
                        @error('remarks')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <button type="submit" class="btn btn-success float-right">Update Salse Report</button>
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
