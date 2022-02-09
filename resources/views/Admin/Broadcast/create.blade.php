 @extends('layouts.master') @section('title', 'Channel')@section('content')
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
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Broadcast Database</a></li>
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Broadcast</a></li>
                             <li class="breadcrumb-item active">Add Stations</li>
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
                             <div class="col-6">
                                 <div class="mb-4">
                                     <button type="submit" class="btn btn-light waves-effect waves-light"
                                         form="checkbox-multiple-insert-form">
                                         <i class="bx bx-plus me-1"></i>
                                         Update Project</button>
                                 </div>
                             </div>

                             <div class="col-6 pull-right">
                                 <form class="input-group" action="{{ route('admin.broadcast.channel.filter') }}" 
                                     method="post">
                                     @csrf
                                     <input type="hidden" name="id" value="{{ $id }}"> <!--$custom_streams_id den geldi-->
                                     <input type="text" name="channel_name" class="form-control"
                                         placeholder="Channel Name" value="{{ request()->get('channelName') }}">
                                     <input type="text" name="cities" class="form-control" placeholder="City"
                                         value="{{ request()->get('cities') }}">
                                         
                                     <input type="text" name="country" class="form-control" placeholder="Country"
                                         value="{{ request()->get('country') }}">
                                         <input type="text" name="" class="form-control" placeholder="Count"
                                         value="{{ $filterCount }}">
                                     <div class="input-group-append"> 
                                         <button class="btn btn-primary" type="submit">Filter</button> 
                                     </div>
                                 </form>
                             </div>
                         </div>
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
                                         <th>Channel ID</th>
                                         <th>Channel Name</th>
                                         <th>Channel Type</th>
                                         <th>Cities</th>
                                         <th>Country</th>
                                         <th>Contient</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($channels as $item)
                                         <tr>
                                             <td>
                                                 <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                     <div class="form-check">
                                                         <input type="checkbox" name="broadcast_id[]"
                                                             class="form-check-input js-check-selected-row"
                                                             id="customCheck1_{{ $loop->index }}"
                                                             value="{{ $item->id }}"
                                                             form="checkbox-multiple-insert-form" />
                                                         <label class="form-check-label"
                                                             for="customCheck1_{{ $loop->index }}"><span
                                                                 class="text-hide"></span></label>
                                                     </div>
                                             </td>
                                             <td><a href="javascript: void(0);"
                                                     class="text-dark fw-medium">{{ $item->acr_id }}</a>
                                             </td>
                                             <td>
                                                 {{ $item->name }}
                                             </td>
                                             <td>
                                                 {{ $item->type }}
                                             </td>
                                             <td>
                                                 {{ $item->city }}

                                             </td>
                                             <td>
                                                 {{ $item->country }}

                                             </td>
                                             <td>
                                                 {{ $item->continent }}

                                             </td>

                                         </tr>
                                     @endforeach


                                 </tbody>
                             </table>
                             <div class="card-footer p-8pt">
                                 {{ $channels->appends(request()->except('page'))->links() }}
                             </div>
                         </div>
                       
                     </div>
                 </div>
             </div>
         </div>
     </div> 
 </div>
 <form action="{{ route('admin.broadcast.channel.add.post', [$id]) }}" method="post"
     id="checkbox-multiple-insert-form">
     @csrf
 </form>
@endsection
