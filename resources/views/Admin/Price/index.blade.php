@extends('layouts.master')@section('title', 'Pricing') @section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Pricing</h4>
                </div>
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                        <li class="breadcrumb-item active">Pricing</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Start your creative project right plans</h4>
                        <div class="flex-shrink-0 align-self-end">
                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link px-3 rounded monthly active" id="monthly" data-bs-toggle="pill"
                                        href="#month" role="tab" aria-controls="month" aria-selected="true">Monthly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="month" role="tabpanel" aria-labelledby="monthly">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card mb-xl-0">
                                            <div class="card-body">
                                                <div class="p-2">
                                                    <h5 class="font-size-16">Starter</h5>
                                                    <h1 class="mt-3">$19 <span
                                                            class="text-muted font-size-16 fw-medium">/ Month</span>
                                                    </h1>
                                                    <p class="text-muted mt-3 font-size-15">For small teams trying out
                                                        Minia for an unlimited
                                                        period of time</p>
                                                    <div class="mt-4 pt-2 text-muted">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Max Audio Streams</th>
                                                                    <td>30</td>


                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Cost Per Stream</th>
                                                                    <td>$8.0</td>


                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Number of Requestss Included</th>

                                                                    <td>10,000</td>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        Price per 1k Extra Valid Requests</th>
                                                                    <td>5</td>


                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Support</th>
                                                                    <td>
                                                                        <div>
                                                                            <i
                                                                                class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                        </div>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Call Back API</th>
                                                                    <td>
                                                                        <div>
                                                                            <i
                                                                                class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                        </div>
                                                                    </td>


                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="mt-4 pt-2">
                                                        <a href="#" class="btn btn-outline-primary w-100">Choose
                                                            Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card bg-primary mb-xl-0">
                                            <div class="card-body">
                                                <div class="p-2">
                                                    <div class="pricing-badge">
                                                        <span class="badge">Current Plan</span>
                                                    </div>
                                                    <h5 class="font-size-16 text-white">Professional</h5>
                                                    <h1 class="mt-3 text-white">$39 <span
                                                            class="text-white font-size-16 fw-medium">/ Month</span>
                                                    </h1>
                                                    <p class="text-white">For larger businesses or
                                                        those with onal administration needs</p>
                                                    <div class="mt-4 pt-2 text-white">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" class="text-white">Max Audio Streams</th>
                                                                    <td class="text-white">60</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="text-white">Cost Per Stream</th>
                                                                    <td class="text-white">$4.0</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="text-white">Number of Requestss Included</th>
                                                                    <td class="text-white">30,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="text-white">
                                                                        Price per 1k Extra Valid Requests</th>
                                                                    <td class="text-white">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="text-white">Support</th>
                                                                    <td>
                                                                        <div>
                                                                            <i
                                                                                class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="text-white">Call Back API</th>
                                                                    <td>
                                                                        <div>
                                                                            <i
                                                                                class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="mt-4 pt-2">
                                                        <a href="#" class="btn btn-light w-100">Choose Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card mb-xl-0">
                                            <div class="card-body">
                                                <div class="p-2">
                                                    <h5 class="font-size-16">Enterprise</h5>
                                                    <h1 class="mt-3">$69 <span
                                                            class="text-muted font-size-16 fw-medium">/ Month</span>
                                                    </h1>
                                                    <p class="text-muted mt-3 font-size-15">For extra large
                                                        businesses or those in regulated industries</p>
                                                    <div class="mt-4 pt-2 text-muted">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Max Audio Streams</th>
                                                                    <td>Unlimited</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Cost Per Stream</th>
                                                                    <td>$2.0</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Number of Requestss Included</th>
                                                                    <td>Unlimited</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        Price per 1k Extra Valid Requests</th>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Support</th>
                                                                    <td>
                                                                        <div>
                                                                            <i
                                                                                class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Call Back API</th>
                                                                    <td>
                                                                        <div>
                                                                            <i
                                                                                class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="mt-4 pt-2">
                                                        <a href="#" class="btn btn-outline-primary w-100">Choose
                                                            Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                  <!--  <div class="card-header">
                        <h4 class="card-title">Project Plans</h4>
                        <p class="card-title-desc">Call to action pricing table is really crucial to your for your
                            business website.
                            Make your bids stand-out with amazing options.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tab-content text-muted mt-4 mt-xl-0" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-price-one" role="tabpanel"
                                        aria-labelledby="v-pills-tab-one">
                                        <div class="table-responsive text-center">
                                            <table class="table table-bordered mb-0 table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td style="width: 20%;">
                                                            <div class="py-3">
                                                                <h5 class="font-size-16 mb-0">19 USD</h5>
                                                            </div>
                                                    
                                                        </td>
                                                      
                                                        <td style="width: 20%; border-left:2px solid #5156be; border-right:2px solid #5156be; border-top:2px solid #5156be;">
                                                            <div class="py-3">
                                                                
                                                                <h5 class="font-size-16 mb-0">
                                                                    39 USD</h5>
                                                      
                                                            </div>
                                                        </td>
                                                        <td style="width: 20%;">
                                                            <div class="py-3">
                                                                <h5 class="font-size-16 mb-0">69 USD</h5>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Max Audio Streams</th>
                                                        <td>30</td>
                                                        <td style="border-left:2px solid #5156be; border-right:2px solid #5156be; ">
                                                           60</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Cost Per Stream</th>
                                                        <td>$8</td>
                                                        <td style="border-left:2px solid #5156be; border-right:2px solid #5156be;">                                                            
                                                            $4</td>
                                                        <td>$2</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Number of Requestss Included</th>
                                                        <td>10.00</td>
                                                        <td style="border-left:2px solid #5156be; border-right:2px solid #5156be;">
                                                            30.00</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            Price per 1k Extra Valid Requests</th>
                                                        <td>5</td>
                                                        <td
                                                            style="border-left:2px solid #5156be; border-right:2px solid #5156be;">
                                                            3</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Support</th>
                                                        <td>
                                                            <div>
                                                                <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                            </div>
                                                        </td>
                                                        <td style="border-left:2px solid #5156be; border-right:2px solid #5156be;">                                                           
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-check-circle text-success font-size-20"></i>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-check-circle text-success font-size-20"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Call Back API</th>
                                                        <td>
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                            </div>
                                                        </td>
                                                        <td
                                                            style="border-left:2px solid #5156be; border-right:2px solid #5156be; border-bottom:2px solid #5156be;">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-check-circle text-success font-size-20"></i>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-check-circle text-success font-size-20"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
