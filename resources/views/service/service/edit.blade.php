@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service Report Edit</h1>
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
                <h3 class="card-title">Service Report</h3>

                  <div class="card-tools">
                    <a class="headerbuttonforAdd addBlogServiceReport" href="{{route('service.report.view')}}">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                            </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('update.service.report', ['id' => $serviceReport->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group required">
                      <label for="company_name" class="control-label">Company Name</label>
                      <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{$serviceReport->name}}" id="name"  placeholder="Company name">
                      @error('company_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror 
                    </div>
                    <div class="form-group required">
                      <label for="name" class="control-label">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$serviceReport->name}}" id="name"  placeholder="Name">
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror 
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{$serviceReport->email}}" >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$serviceReport->phone}}" >
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$serviceReport->address}}" >
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="serial_no">Serial No</label>
                        <input id="sub_title" type="text" class="form-control @error('serial_no') is-invalid @enderror" name="serial_no" value="{{$serviceReport->serial_no}}" >
                        @error('serial_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="installed_system">Installed System</label>
                        <input id="installed_system" type="text" class="form-control @error('installed_system') is-invalid @enderror" name="installed_system" value="{{$serviceReport->installed_system}}" >
                        @error('installed_system')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group required">
                        <label for="warranty" class="control-label">Select Warranty</label>
                        <select class="form-control @error('warranty') is-invalid @enderror" name="warranty" id="warranty" value="{{$serviceReport->warranty}}">
                                <option selected disabled>Select one</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Saans">Saans Warranty</option>
                        </select>
                        @error('warranty')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                    </div> 
                    <div class="form-group">
                        <label for="amc_offer_sent">AMC offer sent?</label>
                        <select class="form-control @error('amc_offer_sent') is-invalid @enderror" name="amc_offer_sent" id="amc_offer_sent" value="{{$serviceReport->amc_offer_sent}}">
                                <option selected disabled>Select one</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                        </select>
                        @error('amc_offer_sent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="amc_value">AMC Value?</label>
                        <input id="amc_value" type="text" class="form-control @error('amc_value') is-invalid @enderror" name="amc_value" value="{{$serviceReport->amc_value}}" >
                        @error('amc_value')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{$serviceReport->remarks}}" >
                        @error('remarks')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="action_plan">Action Plan</label>
                        <input id="action_plan" type="text" class="form-control @error('action_plan') is-invalid @enderror" name="action_plan" value="{{$serviceReport->action_plan}}" >
                        @error('action_plan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div> 
                    <div class="form-group">
                        <label for="concern_engineer">Concern Engineer</label>
                        <input id="concern_engineer" type="text" class="form-control @error('concern_engineer') is-invalid @enderror" name="concern_engineer"value="{{$serviceReport->concern_engineer}}" >
                        @error('concern_engineer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <button type="submit" class="btn btn-primary">Update Service Report</button>
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
