@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"><h5 class="mb-0">Settings</h5></div>
                        
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.profile.save') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{(old('name') ? old('name') : $user->name)}}" autofocus="">
                                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>    
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email eg: abc@xyz.com" value="{{(old('email') ? old('email') : $user->email)}}">
                                @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile" class="col-form-label">Mobile:</label>
                                <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile" value="{{(old('mobile') ? old('mobile') : $user->mobile)}}" onkeypress="return isNumberKey(event);" maxlength="20">
                                @error('mobile')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Password</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.changepassword.save') }}">
                        @csrf
                        
                        <div class="form-group col-md-6">
                            <label for="old_password" class="col-form-label">Old Password</label>
                            <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" autofocus="" placeholder="Old password" value="{{old('old_password')}}">
                            @error('old_password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password" class="col-form-label">New Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New password">
                            @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password_confirmation" class="col-form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                        </div>

                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>   
    </section>
    <!-- /.content -->
  </div>
@endsection

