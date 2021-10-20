@extends('layouts.dashboard.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Salse-Report</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Salse-Report</li>
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
        <h3 class="card-title">Salse-Report</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogSalseReport" href="{{ url('salse/salse-report/create') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>Add
            </a>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button> -->
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button> -->
        </div>
      </div>
      <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::get('success'))                        
                            <div class="alert alert-success"> {{Session::get('success')}} </div>
                        @endif
                       <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Customer Name</th>
                                    <th>Contact Person</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Value(INR)</th>
                                    <th>Remarks</th>
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($salseReports as $key => $salseReport)
                                <tr>
                                  <td>{{$key + 1}}</td>
                                  <td>{{$salseReport->customer_name}}</td>
                                  <td>{{$salseReport->contact_person}}</td>
                                  <td>{{$salseReport->email}}</td>
                                  <td>{{$salseReport->phone}}</td>
                                  <td>{{$salseReport->value_inr}}</td>
                                  <td>{{$salseReport->remarks}}</td>
                                  <!-- if(serviceReport->status == 1)
                                  <td>Active</td>
                                  else
                                  <td>Inactive</td>
                                  endif -->
                                  <td><a href="{{ route('edit.salse.report',['id' => $salseReport->id])}}">Edit</a> | 
                                    <a href="{{ route('delete.salse.report',['id' => $salseReport->id])}}" class="text-danger delete-confirm" data-id="">Delete</a></td>
                              </tr>
                              @endforeach
                                <!-- endforeach -->
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
 <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            customize: function ( xlsx ){
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
 
                // jQuery selector to add a border
                $('row c[r*="10"]', sheet).attr( 's', '25' );
            },
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6]
          },
        } ]
    } );
} );
        
</script>
@stop


@endsection