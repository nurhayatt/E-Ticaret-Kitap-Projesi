 @extends('layouts.master') @section('title', 'Channel')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Channel List</h4>

                 </div>
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Broadcast Database</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                         <li class="breadcrumb-item active">{{ $broadcast->project_name }}</li>
                     </ol>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="row justify-content-between">
                             <div class="col-6">
                                 <div class="mb-4">
                                     <button type="button" class="btn btn-light waves-effect waves-light">
                                         <a href="{{ route('admin.broadcast.channel.add', $broadcast_project_id) }}"><i
                                                 class="bx bx-plus me-1"></i>
                                             Add Channel</a></button>
                                 </div>
                             </div>
                             <div class="col-md-4 d-flex flex-row justify-content-end">
                                 <span class="shadow p-3 border">Country Total :
                                     {{ $channel->groupBy(function ($value, $key) {
                                             return $value->broadcasts->country;
                                         })->count() }}</span>
                                 <span class="shadow p-3 border">Radio Total : {{ $channel->count() }}</span>
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
                                         <th>City</th>
                                         <th>Country</th>
                                         <th>Contient</th>
                                         <th>Stream Link</th>
                                         <th></th>


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
                                                     class="text-dark fw-medium">{{ $item->broadcasts->acr_id }}</a>
                                             </td>
                                             <td>
                                                 {{ $item->broadcasts->name }}
                                             </td>
                                             <td>
                                                 {{ $item->broadcasts->type }}
                                             </td>
                                             <td>
                                                 {{ $item->broadcasts->city }}
                                             </td>
                                             <td>
                                                 {{ $item->broadcasts->country }}
                                             </td>

                                             <td>
                                                 {{ $item->broadcasts->continent }}
                                             </td>
                                             <td>
                                                 {{ $item->broadcasts->mytuner }}
                                             </td>
                                             <td>
                                                 <div>

                                                     <ul>

                                                         <form
                                                             action="{{ route('admin.broadcast.channel.delete', ['id' => $item->id]) }}"
                                                             method="POST">
                                                             @csrf
                                                             <button type="submit"
                                                                 class="dropdown-item text-danger">Delete</button>
                                                         </form>

                                                     </ul>
                                                 </div>
                                             </td>
                                         </tr>
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
