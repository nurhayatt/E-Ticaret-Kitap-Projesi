 @extends('layouts.master') @section('title', ' Buckets')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Custom Files</h4>
                 </div>
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Buckets</a></li> 
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Custom Files</a></li>>
                             <li class="breadcrumb-item active">Audio Upload</li>
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
                                         action="{{ route('superadmin.buckets.channel.add.post') }}" method="POST">
                                         @csrf

                                         @php
                                             $buckets_id = explode('/', url()->current());
                                             
                                         @endphp
                                         <input type="hidden" name="buckets_id" value="{{ end($buckets_id) }}">

                                         <div class="row">
                                             <div class="col-12">
                                                 <div
                                                     class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                     <h4 class="mb-sm-0 font-size-18">File Upload</h4>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- end page title -->

                                         <div class="row">
                                             <div class="col-12">
                                                 <div class="card">
                                             
                                                     <div class="card-body">

                                                         <form action="{{ route('superadmin.buckets.channel.add.post') }}"
                                                             method="POST">
                                                            @csrf
                                                             <label for="audio"
                                                                 class="col-sm-3 col-form-label">Audio</label>
                                                             <div class="col-sm-9">
                                                                 <input name="audio" type="file" class="form-control"
                                                                     id="audio">
                                                             </div>

                                                             <div class="text-center mt-4">
                                                                 <button type="submit"
                                                                     class="btn btn-primary waves-effect waves-light">Send
                                                                     Files</button>

                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div> <!-- end col -->
                                             </div> <!-- end row -->
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
