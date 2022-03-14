<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
    @include('frontend.layouts.header')
   <main> 
        <div class="page-content card container space-he">
            <div class="container px-0">
                <div class="row m-4">
                    <div class="col-12 col-lg-12">

                    <hr class="row brc-default-l1 mx-n1 mb-41" />

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-headera text-blue-d2">
                                <h1 class="page-titlea text-secondary-d1">
                                    Invoice
                                    <small class="page-info">
                                        <i class="fa fa-angle-double-right text-80"></i>
                                        ID: #111-222
                                    </small>
                                </h1>
                        
                                <div class="page-tools">
                                    <div class="action-buttons">
                                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                                            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                                            Print
                                        </a>
                                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                                            <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                                            Export
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">To:</span>
                                <span class="text-600 text-110 text-blue align-middle">Alex Doe</span>
                            </div>
                            <div class="text-grey-m2">
                                <div class="my-1">
                                    Street, City
                                </div>
                                <div class="my-1">
                                    State, Country
                                </div>
                                <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">111-111-111</b></div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <hr class="d-sm-none" />
                            <div class="text-grey-m2">

                                <div class="my-2"><i class="far fa-circle text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Oct 12, 2019</div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning"> Ntago murishyira </span></div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="mt-4">
                        <div class="row text-600 text-white bgc-default-tp1 py-25">
                            <div class="d-none d-sm-block col-1">#</div>
                            <div class="col-9 col-sm-5">Service</div>
                            <div class="d-none d-sm-block col-4 col-sm-2">Description</div>
                            <div class="d-none d-sm-block col-sm-2">Unit Price</div>
                            <div class="col-2">Amount</div>
                        </div>

                        <div class="text-95 text-secondary-d3">
                            <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                                <div class="d-none d-sm-block col-1">1</div>
                                <div class="col-9 col-sm-5">Domain registration</div>
                                <div class="d-none d-sm-block col-2">Hdndiun</div>
                                <div class="d-none d-sm-block col-2 text-95">$10</div>
                                <div class="col-2 text-secondary-d2">$20</div>
                            </div>
                        </div>

                        <div class="row border-b-2 brc-default-l2"></div>

                        <div class="row mt-3">
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                Extra note such as company or payment information...
                            </div>

                            <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">

                                <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                    <div class="col-7 text-right">
                                        Total Amount
                                    </div>
                                    <div class="col-5">
                                        <span class="text-150 text-success-d3 opacity-2">$2,475</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div>
                            <span class="text-secondary-d1 text-105">Thank you for your business</span>
                            <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

