@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Service Report Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Service Report Add</li>
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
        <form action="{{ route('store.service.report') }}" method="POST" enctype="multipart/form-data" id="live_form">
            @csrf
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Service Report</h3>

                                <!--  <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div> -->
                                <div class="card-tools">
                                    <a class="headerbuttonforAdd addBlogServiceReport" href="{{route('service.report.view')}}">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                    </a>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
                                    @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="serial_no">Serial No</label>
                                    <input id="sub_title" type="text" class="form-control @error('serial_no') is-invalid @enderror" name="serial_no" value="{{ old('serial_no') }}">
                                    @error('serial_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="installed_system">Installed System</label>
                                    <input id="installed_system" type="text" class="form-control @error('installed_system') is-invalid @enderror" name="installed_system" value="{{ old('installed_system') }}">
                                    @error('installed_system')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group required">
                                    <label for="warranty" class="control-label">Select Warranty</label>
                                    <select class="form-control @error('warranty') is-invalid @enderror" name="warranty" id="warranty" value="{{ old('warranty') }}">
                                        <option selected disabled>Select one</option>
                                        <option @if(old('warranty')=='Yes' ){{('selected')}}@endif value="Yes">Yes</option>
                                        <option @if(old('warranty')=='No' ){{('selected')}}@endif value="No">No</option>
                                        <option @if(old('warranty')=='Saans Warranty' ){{('selected')}}@endif value="Saans Warranty"">Saans Warranty</option>
                        </select>
                        @error('warranty')
                            <span class=" invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="amc_offer_sent">AMC offer sent?</label>
                                    <select class="form-control @error('amc_offer_sent') is-invalid @enderror" name="amc_offer_sent" id="amc_offer_sent" value="{{ old('amc_offer_sent') }}" onChange="check(this);">
                                        <option selected disabled>Select one</option>
                                        <option @if(old('amc_offer_sent')=='Yes' ){{('selected')}}@endif value="Yes" id="yes">Yes</option>
                                        <option @if(old('amc_offer_sent')=='No' ){{('selected')}}@endif value="No" id="no">No</option>
                                    </select>

                                    @error('amc_offer_sent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                @php
                                $amc_offer_sentShow = false;
                                if(old('amc_offer_sent')){
                                if(old('amc_offer_sent') == 'Yes'){
                                $amc_offer_sentShow = true;
                                }
                                }
                                @endphp
                                <div class="form-group amc_value_class" id="amc-value" @if(!$amc_offer_sentShow) style="display:none;" @endif>
                                    <label for="amc_value">AMC Value?</label>
                                    <!-- <textarea class="form-control form-control" cols="40" id="feedback_ok" name="feedback_ok" rows="10"></textarea> -->
                                    <textarea id="amc_value" type="text" class="form-control @error('amc_value') is-invalid @enderror" name="amc_value">{{ old('amc_value') }}</textarea>
                                    @error('amc_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="remarks">Remarks</label>
                                    <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}">
                                    @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="action_plan">Action Plan</label>
                                    <input id="action_plan" type="text" class="form-control @error('action_plan') is-invalid @enderror" name="action_plan" value="{{ old('action_plan') }}">
                                    @error('action_plan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="concern_engineer">Concern Engineer</label>
                                    <input id="concern_engineer" type="text" class="form-control @error('concern_engineer') is-invalid @enderror" name="concern_engineer" value="{{ old('concern_engineer') }}">
                                    @error('concern_engineer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                        <button type="submit" class="btn btn-success float-right">Create New Service Report</button>
                        <!-- <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a> -->
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
<script>
    function check(elem) {
        var amcValueDiv = document.getElementById("amc-value");
        if (elem.value == 'Yes') {
            amcValueDiv.style.display = 'block';
            $('#amc_value').attr('required', true);
        } else {
            amcValueDiv.style.display = 'none';
            $('#amc_value').attr('required', false);
        }
    }
</script>
@endsection