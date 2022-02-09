
@extends('layouts.master')@section('title', 'Invocies') @section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Invoice List</h4>
                </div>
                      <div  class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                            <li class="breadcrumb-item active">Invoice List</li>
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
                                    <button type="button" class="btn btn-light waves-effect waves-light"><i
                                            class="bx bx-plus me-1"></i> Add Invoice</button>
                                </div>
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
                                        <th style="width: 120px;">Invoice ID</th>
                                        <th>Date</th>
                                        <th>Billing Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th style="width: 150px;">Download Pdf</th>
                                        <th style="width: 90px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                        <td>
                                            12 Oct, 2020
                                        </td>
                                        <td>Connie Franco</td>

                                        <td>
                                            $26.30
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i
                                                        class="bx bx-download label-icon"></i> Pdf</button>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Print</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>

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
