@extends('layouts.master')@section('title', 'Invocies') @section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Invoice Detail</h4>
                </div>
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                        <li class="breadcrumb-item active">Invoice Detail</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-title">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <div class="mb-4">
                                        <img src={{ asset('assets/images/logo-sm3.png') }} alt="" height="80px"
                                            width="%100">
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-4">
                                        <h4 class="float-end font-size-16">Invoice #{{ $invoice->invoice_id }}</h4>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1"></p>
                         
                          
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-sm-6">
                                @forelse ($invoices_information as $item )
                               
                                    <div>
                                        <h5 class="font-size-15 mb-3">Billed To:</h5>
                                        <h5 class="font-size-14 mb-2">{{ $item->name }}</h5>
                                          <p class="mb-1">RadioMonitorNetwork.com
                                        </p>
                                        <p class="mb-1">{{-- $item->adress --}}</p>
                                        <p class="mb-1">106 Ardmore PL NW Ste 1  </p>
                                        <p class="mb-1"> Atlanta, GA, 30309 USA</p>
                                           <p class="mb-1">info@radiomonitornetwork.com</p>
                                      
                                       
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <h5 class="font-size-15">Invoice Date:</h5>
                                        <p>{{ $item->date }}</p>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="font-size-15">Payment Method:</h5>
                                        <p class="mb-1">{{ $item->payment }}</p>
                                        <p>Please send your inquiries about this invoice to info@radiomonitornetwork.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="3">Veri yok.</td>
                        </tr>
                        @endforelse
                        <div class="py-2 mt-3">
                            <h5 class="font-size-15">Order summary</h5>
                        </div>
                        <div class="p-4 border rounded">
                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;">No.</th>
                                            <th>Item</th>
                                            <th class="text-end" style="width: 120px;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($invoices as $item )
                                       
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>
                                                    <h5 class="font-size-15 mb-1">Basic Fee</h5>

                                                </td>
                                                <td class="text-end">$ {{ number_format($item->amount, 2) }}
                                                </td>
                                            <tr>
                                            <tr>
                                                <th scope="row">02</th>
                                                <td>
                                                    <h5 class="font-size-15 mb-1">Usage Fee</h5>

                                                </td>
                                                <td class="text-end">${{ number_format($item->amount_two, 2) }}
                                                </td>
                                            </tr>
                                            <th scope="row" colspan="2" class="border-0 text-end">Total</th>
                                            <td class="border-0 text-end">
                                                <h4 class="m-0">${{ number_format($item->total, 2) }}</h4>
                                            </td>
                                            </tr>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">Veri yok.</td>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-print-none mt-3">
                            <div class="float-end">
                                <a href="javascript:window.print()"
                                    class="btn btn-success waves-effect waves-light me-1"><i
                                        class="fa fa-print"></i></a>
                                <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
