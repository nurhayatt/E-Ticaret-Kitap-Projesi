 @extends('layouts.master') @section('title', 'Channel-Edit')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Channel Add</h4>
                     <div class="page-title-right">
                         <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Channel</a></li>
                             <li class="breadcrumb-item active">Channel Add</li>
                         </ol>
                     </div>

                 </div>
             </div>
         </div>
         <!-- end page title -->

         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table align-middle datatable dt-responsive table-check nowrap"
                                 style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                 <div class="container page__container">
                                     <form enctype="multipart/form-data"
                                         action="{{ route('admin.channel.update', ['id' => $cities->id]) }}"
                                         method="POST">
                                         @csrf
                                         <div class="row">
                                             <div class="col-lg-9 pr-lg-0">
                                                 <div class="page-section">
                                                     <h4>Channel Add</h4>
                                                     <div class="list-group list-group-form">
                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Channel Name </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="channel_name" id="channel_name "
                                                                         value="{{ old('channel_name') ?? $cities['channel_name'] }}"
                                                                         placeholder="Channel Name..." />
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
                                                                         id="channel_type"
                                                                         value="{{ old('channel_type') ?? $cities['channel_type'] }}">
                                                                         <option value="Radyo">Radyo</option>
                                                                         <option value="Tv">Tv</option>

                                                                     </select>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <!--
                                                 <div class="list-group-item">
                                                     <div class="form-group row align-items-center mb-0">
                                                         <label class="form-label col-form-label col-sm-3">Logo </label>
                                                         <div class="col-sm-2">
                                                             <div class="circle upload-button">
                                                                 <img id="myimg" class="profile-pic"
                                                                     src="{{ asset('images') }}/<?php echo $cities['logo']; ?>" />
                                                             </div>
                                                         </div>
                                                         <div class="upload-btn-wrapper">
                                                             <div id="resimsec" class="btn btn-primary">Resim Ekle</div>
                                                             <input type="file" class="file-upload" name="logo" />
                                                         </div>
                                                     </div>
                                                 </div>-->
                                                 <div class="list-group-item">
                                                     <div class="form-group row align-items-center mb-0">
                                                         <label class="form-label col-form-label col-sm-3">Stream
                                                             Link</label>
                                                         <div class="col-sm-9">
                                                             <input type="text" class="form-control"
                                                                 name="stream_link" id="stream_link"
                                                                 value="{{ old('stream_link') ?? $cities['stream_link'] }}"
                                                                 placeholder="Stream Link" />
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="list-group-item">
                                                     <div class="row">
                                                         <div class="col-lg-6">
                                                             <label class="form-label col-sm-3">Select Country</label>
                                                             <select id="country" name="country"
                                                                 value="{{ old('country') ?? $cities['country'] }}"
                                                                 class="form-control"></select>
                                                         </div>
                                                         <div class="col-lg-6">
                                                             <label class="form-label col-sm-3">City</label>
                                                             <br>
                                                             <select id="state" class="selectpicker" name="city"
                                                                 value="{{ old('city') ?? $cities['city'] }}"
                                                                 class="form-control" multiple
                                                                 data-live-search="true">
                                                             </select>
                                                             <input type="hidden" name="city">

                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="list-group-item">

                                                     <div class="text-center">
                                                         <button type="submit" class="btn btn-primary btn-block"
                                                             style="width:30%;" id="button-click">Kaydet</button>
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
