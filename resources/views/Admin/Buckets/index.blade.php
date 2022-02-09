 @extends('layouts.master') @section('title', 'Buckets')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Audio List</h4>
                 </div>
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Bucekts</a></li>
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Custom Files</a></li>
                             <li class="breadcrumb-item active">Audio List</li>
                         </ol>
                     </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-sm">
                                 <div class="mb-4">
                                     <button type="button" class="btn btn-light waves-effect waves-light">
                                         <a href="{{ route('admin.buckets.channel.add', $buckets_id) }}"><i
                                                 class="bx bx-plus me-1"></i>
                                             Audio Upload</a></button>
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
                                         <th>ID</th>
                                         <th>Title</th>
                                         <th></th>

                                     </tr>
                                 </thead>

                                 <tbody>
                                     @foreach ($audio as $item)

                                         <tr>
                                             <td>
                                                 <div class="form-check font-size-16">
                                                     <input type="checkbox" class="form-check-input">
                                                     <label class="form-check-label"></label>
                                                 </div>
                                             </td>
                                             <td>#{{ $item->id }}</a>
                                             </td>
                                             <td>
                                                 {{ $item->audio }}
                                             </td>

                                             <td >
                                                 <div>
                                                     <ul>
                                                         <form
                                                             action="{{ route('admin.buckets.audio.delete', ['id' => $item->id]) }}"
                                                             method="POST">
                                                             @csrf
                                                             <button type="submit"
                                                                 class="dropdown-item text-danger">Delete</button>
                                                         </form>
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
