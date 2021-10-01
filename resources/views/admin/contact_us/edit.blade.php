@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact_us</li>
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
                        <div class="col-6"><h5 class="mb-0">Heading</h5></div>
                        
                    </div>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('update.contact_us', ['id' => $contactUs->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                       <input type="hidden" name="contactUsId" value="{{$contactUs->id}}">
                        <div class="form-group required">
                            <label for="name" class="control-label">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" rows="3" value="{{$contactUs->name}}" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                          <label for="email_us" class="control-label">Email Us</label>
                          <input type="text" class="form-control @error('email_us') is-invalid @enderror" name="email_us" id="email_us" value="{{$contactUs->email_us}}"  placeholder="Email Us" required>
                            @error('email_us')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group required">
                            <label for="blog_link" class="control-label">Blog Link</label>
                            <input class="form-control @error('blog_link') is-invalid @enderror" name="blog_link" id="phone" rows="3" value="{{$contactUs->blog_link}}" >
                            @error('blog_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="google_link" class="control-label">Google Link</label>
                            <input class="form-control @error('google_link') is-invalid @enderror" name="google_link" id="google_link" rows="3" value="{{$contactUs->google_link}}" >
                            @error('google_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="facebook_link" class="control-label">Facebook Link</label>
                            <input class="form-control @error('facebook_link') is-invalid @enderror" name="facebook_link" id="facebook_link" rows="3" value="{{$contactUs->facebook_link}}" >
                            @error('facebook_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="twiter_link" class="control-label">Twiter Link</label>
                            <input class="form-control @error('twiter_link') is-invalid @enderror" name="twiter_link" id="twiter_link" rows="3" value="{{$contactUs->twiter_link}}" >
                            @error('twiter_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="message" class="control-label">Message</label>
                            <input class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="3" value="{{$contactUs->message}}" >
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h3 class="card-title">Location</h3>
                        <table id="customFields">
                            @php $countLocation = count($contactUs->location); $j=0; @endphp
                            @foreach($contactUs->location as $location)
                                @php $j += 1; @endphp
                                <tr>
                                    <td>
                                        <input class="form-control" type="text" name="address_type[]" placeholder="Tyepe of the Address" value="{{$location->name}}">
                                    </td>
                                    <td>
                                        <input class="form-control"  type="text" name="address[]" placeholder="Input Address" value="{{$location->address}}">
                                    </td>
                                    <td>
                                        <input class="form-control"  type="text" name="address_phone[]" placeholder="Phone Number" value="{{$location->phone}}">
                                    </td>
                                    
                                    
                                    <td>
                                        
                                        @if($j == $countLocation)
                                            <a href="javascript:void(0)" class="actionbtn addNew">+</a>
                                        @else
                                            <a href="javascript:void(0)" class="actionbtn remove">-</a>
                                        @endif
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </table>
                        <button type="submit" class="btn btn-primary">Update Contact Us</button>
                      </form>
                </div>
                        

                    <!--  <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div> -->
                        <div class="card-tools">
                        
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        </div>
                    </div>
                <div class="card-body">
                        
                </div>
            </div>   
    </section>
    <!-- /.content -->
  </div>
  @section('script')
    <!-- <script type="text/javascript">


        $(document).ready(function() {


        $(".addNew").click(function(){ 
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });


        $("table").on("click",".remove",function(){ 
            $(this).parents(".control-group").remove();
        });


        });


    </script> -->

    <script>
        $(document).ready(function(){
            $(document).on('click', '.addNew', function(){
                $('.actionbtn').removeClass('addNew').addClass('remove');
                $('.actionbtn').text('-');
                $("#customFields").append('<tr><td><input class="form-control" type="text" name="address_type[]" placeholder="Tyepe of the Address" value="{{$location->name}}"></td><td><input class="form-control"  type="text" name="address[]" placeholder="Input Address" value="{{$location->address}}"></td><td><input class="form-control"  type="text" name="address_phone[]" placeholder="Phone Number" value="{{$location->phone}}"></td><td><a href="javascript:void(0)" class="actionbtn addNew">+</a></td></tr>');
            });

            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });
        });
    </script>
  @stop
@endsection

