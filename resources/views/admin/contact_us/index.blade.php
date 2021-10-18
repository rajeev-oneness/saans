@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact Us</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
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
        <h3 class="card-title">Contact Us</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogContactUs" href="{{ url('admin/contact_us/add') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>Add
            </a>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button> -->
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Office Type</th>
                                    <th>Blog Link</th>
                                    <th>Google Link</th>
                                    <th>FaceBook Link</th>
                                    <th>Twiter Link</th>
                                    <th>Email Us</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactUs as $key => $contact)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->address}}</td>
                                    <td>{{$contact->office_type}}</td>
                                    <td>{{$contact->blog_link}}</td>
                                    <td>{{$contact->google_link}}</td>
                                    <td>{{$contact->facebook_link}}</td>
                                    <td>{{$contact->twiter_link}}</td>
                                    <td>{{$contact->email_us}}</td>
                                    <td>{{$contact->message}}</td>
                                    @if($contact->status==1)
                                    <td>Active</td>
                                    @else
                                    <td>Inactive</td>
                                    @endif
                                    <td><a href="{{route('edit.contact_us',['id' => $contact->id])}}">Edit</a> |  <a href="{{ route('delete.contact_us', ['id' => $contact->id]) }}" class="text-danger delete-confirm">Delete</a></td>
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