 @extends('layouts.master') @section('title', 'Channel')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Custom Streams</h4>

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
                         <div class="row">
                             <div class="col-sm">
                                 <div class="mb-4">
                                     <div class="container">
                                         <button type="button" class="btn btn-light waves-effect waves-light"
                                             data-toggle="modal" data-target="#form">
                                             <a href="{{ route('admin.custom.add') }}"><i class="bx bx-plus me-1"></i>
                                                 Create Project</a></button>

                                     </div>

                                     <div class="modal fade" id="form" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header border-bottom-0">
                                                     <h5 class="modal-title" id="exampleModalLabel">Create Project
                                                     </h5>
                                                     <button type="button" class="close" data-dismiss="modal"
                                                         aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                     </button>
                                                 </div>
                                                 <form enctype="multipart/form-data"
                                                     action="{{ route('admin.custom.add.post') }}" method="POST">
                                                     @csrf
                                                     <div class="modal-body">
                                                         <div class="form-group">
                                                             <label for="email1">Project Name*</label>
                                                             <input type="TEXT" class="form-control"
                                                                 name="project_name" id="project_name" placeholder="">

                                                         </div>
                                                         <div class="form-group">

                                                             <label for="email1">Bucket*</label>

                                                             <select class="form-control" name="bucket_id"
                                                                 id="bucket_id" value="">
                                                                 @foreach ($buckets as $rs)
                                                                     <option value="{{ $rs->id }}">
                                                                         {{ $rs->bucket_name }}</option>
                                                                 @endforeach

                                                             </select>

                                                         </div>
                                                         <div class="form-group">
                                                             <label for="email1">Broadcast Monitoring Type</label>
                                                             
                                                             <div class="form-check">
                                                                 <input class="form-check-input" type="radio"
                                                                     name="broadcast_type" id="flexRadioDefault1">

                                                                 <label class="form-check-label"
                                                                     for="flexRadioDefault1">
                                                                     Monitor streams on ACRCloud
                                                                 </label>

                                                             </div>
                                                             <div class="form-check">
                                                                 <input class="form-check-input" type="radio"
                                                                     name="broadcast_type" id="flexRadioDefault2"
                                                                     checked>
                                                                 <label class="form-check-label"
                                                                     for="flexRadioDefault2">
                                                                     Monitor streams on your local server
                                                                 </label>
                                                             </div>
                                                         </div>

                                                     </div>

                                                     <div
                                                         class="modal-footer border-top-0 d-flex justify-content-center">
                                                         <button type="submit" class="btn btn-success">Submit</button>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>

                            <!-- <div class="col-sm-auto">
                                 <div class="d-flex align-items-center gap-1 mb-4">
                                     <div class="input-group datepicker-range">
                                         <input type="text" class="form-control flatpickr-input" data-input
                                             aria-describedby="date1">
                                         <button class="input-group-text" id="date1" data-toggle><i
                                                 class="bx bx-calendar-event"></i></button>
                                     </div>
                                     <div class="dropdown">
                                         <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bx bx-dots-horizontal-rounded"></i>
                                         </a>

                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#">Action</a></li>
                                             <li><a class="dropdown-item" href="#">Another action</a></li>
                                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>-->
                         </div>
                         <!-- end row -->


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
