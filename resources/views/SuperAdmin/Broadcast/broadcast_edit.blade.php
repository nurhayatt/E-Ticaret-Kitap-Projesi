 @extends('layouts.master') @section('title', 'Broadcast-Edit')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Project Edit</h4>
                     <div class="page-title-right">
                         <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Broadcast</a></li>
                             <li class="breadcrumb-item active">Project Edit</li>
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
                                         action="{{ route('superadmin.broadcast.update', ['id' => $projects->id]) }}"
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
                                                                     Project Name </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="project_name" id="project_name "
                                                                         value="{{ old('project_name') ?? $projects['project_name'] }}"
                                                                         placeholder="Project Name..." />
                                                                 </div>
                                                             </div>
                                                         </div>

                                                     </div>
                                                     <div class="list-group list-group-form">
                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Project Name </label>
                                                                 <div class="col-sm-9">
                                                                     <select class='form-control' name='bucket_id'
                                                                         id="bucket_id"
                                                                         value="{{ old('bucket_id') ?? $projects['bucket_id'] }}">
                                                                         @foreach ($buckets as $item)
                                                                             <option value='{{ $item['id'] }}'>
                                                                                 {{ $item['bucket_name'] }}
                                                                             </option>
                                                                         @endforeach
                                                                     </select>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="list-group-item">
                                                     <div class="center">
                                                         <center><button type="submit" class="btn btn-primary btn-block"
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
