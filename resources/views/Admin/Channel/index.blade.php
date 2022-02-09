 @extends('layouts.master') @section('title', 'Channel')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Broadcast Monitoring</h4>
                 </div>
                 <div class="page-title-left">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Custom Streams</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                         
                         <li class="breadcrumb-item active">{{$custom_streams->project_name}}</li>
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
                                     <button type="button" class="btn btn-light waves-effect waves-light">
                                         <a href="{{ route('admin.channel.add', $custom_streams_id) }}"><i
                                                 class="bx bx-plus me-1"></i>
                                             Add Channel</a></button>
                                 </div>
                             </div>
                         </div>
                         <!-- end row -->

                         <div class="table-responsive">
                             <table class="table align-middle datatable dt-responsive table-check nowrap"
                                 style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                 <thead>
                                     <tr class="bg-transparent">
                                         <th style="width: 30px;">
                                             <div class="form-check font-size-16">
                                                 <input type="checkbox" name="check" class="form-check-input"
                                                     id="checkAll">
                                                 <label class="form-check-label" for="checkAll"></label>
                                             </div>
                                         </th>
                                         <th style="width: 120px;">Channel Name</th>
                                         <th>Channel Type</th>
                                         <th>Broadcast Link</th>
                                         <th>Country</th>
                                         <th>Edit</th>

                                     </tr>
                                 </thead>

                                 <tbody>
                                     @foreach ($channel as $item)
                                         <tr>
                                             <td>
                                                 <div class="form-check font-size-16">
                                                     <input type="checkbox" class="form-check-input">
                                                     <label class="form-check-label"></label>
                                                 </div>
                                             </td>
                                             <td><a href="javascript: void(0);"
                                                     class="text-dark fw-medium">{{ $item->channel_name }}</a>
                                             </td>
                                             <td>
                                                 {{ $item->channel_type }}
                                             </td>
                                             <td>
                                                 {{ $item->stream_link }}
                                             </td>
                                             <td>
                                                 {{ $item->country }}
                                                 {{-- $item->country.'('.$item->city.')' --}}
                                             </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <button
                                                         class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                         type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                         <i class="bx bx-dots-horizontal-rounded"></i>
                                                     </button>
                                                     <ul class="dropdown-menu dropdown-menu-end">
                                                         <li><a class="dropdown-item"
                                                                 href="{{ route('admin.channel.edit', ['id' => $item->id]) }}">Edit</a>
                                                         </li>
                                                         <li>
                                                             <form
                                                                 action="{{ route('admin.channel.delete', ['id' => $item->id]) }}"
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
