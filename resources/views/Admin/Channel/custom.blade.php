 @extends('layouts.master') @section('title', 'Custom Streams')@section('content')
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
                         <li class="breadcrumb-item active">Projects</li>
                     </ol>
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
                                     <button type="button" class="btn btn-light waves-effect waves-light"
                                         data-toggle="modal" data-target="#form">
                                         <i class="bx bx-plus me-1"></i>
                                         Create Project</button>


                                     <div class="modal fade" id="form" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header border-bottom-0">
                                                     <h5 class="modal-title" id="exampleModalLabel">Create Project
                                                     </h5>
                                                     <button type="button" class="btn-close" data-dismiss="modal"
                                                         aria-label="Close">
                                                         <!--<span aria-hidden="true">&times;</span>-->
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
                                                                     Monitor streams on Radio Monitoring Network
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
                                                         <button type="submit" class="btn btn-success">Create</button>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>


                                 </div>
                             </div>

                         </div>
                         <!-- end row -->

                         <div class="table-responsive">
                             <table class="table align-middle datatable dt-responsive table-check nowrap"
                                 style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                 <thead>
                                     <tr class="bg-transparent">

                                         <th>ID</th>
                                         <th>
                                             Project Name
                                         </th>
                                         <th>Channel Type</th>
                                         <th>Attached Buckets</th>
                                         <th>Number of Radio</th>
                                         <th>Edit</th>
                                        
                                         
                                     </tr>
                                 </thead>
                                 @php
                                     $counter = 1;
                                 @endphp
                                 <tbody>
                                     @foreach ($projects as $item)
                                         <tr>
                                             <td>
                                                 #<a
                                                     href="{{ route('admin.channel.add', $item->id) }}"> 
                                                 {{ $counter }}

                                                 @php
                                                     $counter++;
                                                 @endphp</a>
                                             </td>
                                             <td><a href="javascript: void(0);" class="text-dark fw-medium">

                                                     <a href="{{ route('admin.channel.list', $item->id) }}">
                                                         {{ $item->project_name }}</a>

                                             </td>
                                             <td>
                                                 @if ($item->broadcast_type == 'on')

                                                     <strong>{{ 'Monitor streams on Radio Monitoring Network ' }}
                                                     </strong>

                                                 @else
                                                     <strong>{{ 'Monitor streams on your local server' }}
                                                     </strong>
                                                 @endif

                                             </td>
                                             <td>
                                                 {{ $item->getBucket->bucket_name }}
                                             </td>
                                               <td>
                                                 {{ $item->custom->count()}}
                                             </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <button
                                                         class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                         type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                         <i class="bx bx-dots-horizontal-rounded"></i>
                                                     </button>
                                                     <ul class="dropdown-menu">
                                                         <li><a class="dropdown-item"
                                                                 href="{{ route('admin.custom.edit', ['id' => $item->id]) }}">Edit</a>
                                                         </li>
                                                         <li>
                                                             <form
                                                                 action="{{ route('admin.custom.delete', ['id' => $item->id]) }}"
                                                                 method="POST">
                                                                 @csrf
                                                                 <button type="submit"
                                                                     class="dropdown-item text-danger">Delete</button>
                                                             </form>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> 
 </div>
@endsection
