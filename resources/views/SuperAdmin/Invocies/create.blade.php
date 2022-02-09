 @extends('layouts.master') @section('title', 'Channel-Add')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Broadcast Monitoring</h4>
                 </div>
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Custom Streams</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                         <li class="breadcrumb-item active">Add Channel</li>
                     </ol>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table align-middle datatable dt-responsive table-check nowrap"
                                 style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                 <div class="container page__container">
                                     <form enctype="multipart/form-data"
                                         action="{{ route('superadmin.channel.add.post') }}" method="POST">
                                         @csrf
                                         @php
                                             $stream_id = explode('/', url()->current());
                                             
                                         @endphp
                                         <input type="hidden" name="custom_streams_id" value="{{ end($stream_id) }}">
                                         <div class="row">
                                             <div class="col-lg-9 pr-lg-0">
                                                 <div class="page-section">
                                                     <h4>Invocies</h4>
                                                     <div class="list-group list-group-form">
                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Invoice ID </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="invocies_id" id="invocies_id " value=""
                                                                         placeholder=" Invoice ID..." />
                                                                 </div>
                                                             </div>
                                                         </div>

                                                          <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                    Date </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="invocies_id" id="invocies_id " value=""
                                                                         placeholder=" Invoice ID..." />
                                                                 </div>
                                                             </div>
                                                         </div>


                                                           <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                    Billing Name </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="billing_name" id="billing_name " value=""
                                                                         placeholder=" Billing Name.." />
                                                                 </div>
                                                             </div>
                                                         </div>



                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label
                                                                     class="form-label col-form-label col-sm-3">Channel
                                                                     Type
                                                                 </label>
                                                                 <div class="col-sm-9">
                                                                     <select class="form-control" name="channel_type"
                                                                         id="channel_type">
                                                                         <option value="Radyo">Radyo</option>
                                                                         <option value="Tv">Tv</option>

                                                                     </select>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="list-group-item">
                                                     <div class="form-group row align-items-center mb-0">
                                                         <label class="form-label col-form-label col-sm-3">Stream
                                                             Link</label>
                                                         <div class="col-sm-9">
                                                             <input type="text" class="form-control"
                                                                 name="stream_link" id="stream_link" value=""
                                                                 placeholder="Stream Link" />
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="list-group-item">
                                                     <div class="row">
                                                         <div class="col-lg-6">
                                                             <label class="form-label col-sm-3">Select Country</label>
                                                             <select id="country" name="country"
                                                                 class="form-control"></select>
                                                         </div>
                                                         <div class="col-lg-6">
                                                             <label class="form-label col-sm-3">City</label>
                                                             <br>
                                                             <select id="state" class="selectpicker " multiple
                                                                 data-live-search="true">
                                                             </select>
                                                             <input type="hidden" name="city">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="list-group-item">
                                                     <div class="center">
                                                         <center><button type="submit" id="button-click"
                                                                 class="btn btn-primary btn-block"
                                                                 style="width:30%;">Kaydet</button></center>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                 </div>

                         </div>
                         </form>
                     </div>

                     </table>
                 </div>
                 <!-- end table responsive -->
             </div>
             <!-- end card body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
 </div>
 <!-- end row -->
 </div> <!-- container-fluid -->
 </div>
@endsection

@section('js')
 <script>
     $('document').ready(function() {
         $('#button-click').click(function() {
             var ag = $('.bootstrap-select button').attr('title');
             $('[name="city"]').val(ag);
         });
         //  $(".dropdown-menu inner show").find("li").eq(0).remove();
     });
 </script>
@endsection
