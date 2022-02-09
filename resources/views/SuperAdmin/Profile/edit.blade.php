 @extends('layouts.master') @section('title', 'Profile-Edit')@section('content')
 <div class="page-content">
     <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Profile</h4>
                 </div>
                 <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                         <li class="breadcrumb-item active">Profile-Edit</li>
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
                                         action="{{ route('superadmin.profile.edit.post', ['id' => auth()->user()->id]) }}"
                                         method="POST">
                                         @csrf
                                         <div class="row">
                                             <div class="col-lg-9 pr-lg-0">
                                                 <div class="page-section">
                                                     <h4>Profile Edit</h4>
                                                     <div class="list-group list-group-form">
                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Name </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="name" id="name "
                                                                         value="{{ Auth::user()->name ?? $users['name'] }}"
                                                                         placeholder="Name..." />
                                                                 </div>
                                                             </div>
                                                         </div>

                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Company </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="company" id="company "
                                                                         value="{{ Auth::user()->company ?? $users['company'] }}"
                                                                         placeholder="Company..." />
                                                                 </div>
                                                             </div>
                                                         </div>

                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Email </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="email" id="email "
                                                                         value="{{ Auth::user()->email ?? $users['email'] }}"
                                                                         placeholder="Email..." />
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="list-group-item">
                                                             <div class="form-group row align-items-center mb-0">
                                                                 <label class="form-label col-form-label col-sm-3">
                                                                     Telephone </label>
                                                                 <div class="col-sm-9">
                                                                     <input type="text" class="form-control"
                                                                         name="phone" id="phone "
                                                                         value="{{ Auth::user()->phone ?? $users['phone'] }}"
                                                                         placeholder="Telephone..." />
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

     </div>

 </div>

 </div>
 </div>
@endsection
