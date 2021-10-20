@extends('layouts.dashboard.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Service-Report</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Service-Report</li>
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
        <h3 class="card-title">Service-Report</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogServiceReport" href="{{ url('service/service-report/create') }}">
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
                                    <th>Company Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Serial No</th>
                                    <th>Installed System</th>
                                    <th>Warranty</th>
                                    <th>AMC Offer Sent</th>
                                    <th>AMC Value</th>
                                    <th>Remarks</th>
                                    <th>Action Plan</th>
                                    <th>Concern Engineer</th>
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serviceReports as $key => $serviceReport)
                                <tr>
                                  <td>{{$key + 1}}</td>
                                  <td>{{$serviceReport->company_name}}</td>
                                  <td>{{$serviceReport->name}}</td>
                                  <td>{{$serviceReport->email}}</td>
                                  <td>{{$serviceReport->phone}}</td>
                                  <td>{{$serviceReport->address}}</td>
                                  <td>{{$serviceReport->serial_no}}</td>
                                  <td>{{$serviceReport->installed_system}}</td>
                                  <td>{{$serviceReport->warranty}}</td>
                                  <td>{{$serviceReport->amc_offer_sent}}</td>
                                  <td>{{$serviceReport->amc_value}}</td>
                                  <td>{{$serviceReport->remarks}}</td>
                                  <td>{{$serviceReport->action_plan}}</td>
                                  <td>{{$serviceReport->concern_engineer}}</td>
                                  <!-- if(serviceReport->status == 1)
                                  <td>Active</td>
                                  else
                                  <td>Inactive</td>
                                  endif -->
                                  <td><a href="{{ route('edit.service.report',['id' => $serviceReport->id])}}">Edit</a> | 
                                    <a href="{{ route('delete.service.report',['id' => $serviceReport->id])}}" class="text-danger delete-confirm" data-id="">Delete</a></td>
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
              columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]
          },
        } ]
    } );
    
} );
        
</script>
@stop


@endsection