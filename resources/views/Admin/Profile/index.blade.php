@extends('layouts.master')@section('title', 'Profile') @section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Profile</h4>
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12">
            </div>
        </div>
        <div class="table-responsive mb-4">
            <table class="table align-middle datatable dt-responsive table-check nowrap"
                style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                <thead>
                    <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>

                            <td>
                                <img width="32" height="32" class="rounded-circle mr-8pt"
                                    src="https://ui-avatars.com/api/?name={{ substr($item->name, 0, 2) }}&color=7F9CF5&background=EBF4FF"
                                    alt="account />
                                <a href=" #" class="text-body">{{ $item->name }}</a>
                            </td>
                            <td>{{ $item->company }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="#" class="badge badge-soft-primary">{{ $item->phone }}</a>
                                </div>
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
                                                href=" {{ route('admin.profile.edit', ['id' => auth()->user()->id]) }}">Edit</a>
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

@endsection
