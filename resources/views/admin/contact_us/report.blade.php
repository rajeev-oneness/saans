@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact Us Report</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact Us Report</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      
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
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactUsReports as $key => $contact)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->message}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $contactUsReports->links() }}
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