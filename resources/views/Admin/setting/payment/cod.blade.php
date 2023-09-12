@extends('admin.master');
@section('title', 'Admin-setting-payment-cod')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">Payment Settings </h3>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs menu-tabs">
                    <li class="nav-item ">
                        <a class="nav-link" href="payment-settings.html">Stripe</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="razorpay.html">Razorpay</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paypal.html">Paypal</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="paystack.html">Paystack</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cod.html">COD</a>
                    </li>
                </ul>
                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">COD</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-heads mb-4">
                                    <h6 class="card-title">Cash On Delivery</h6>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="default_otps" class="check" type="checkbox" checked="">
                                            <label for="default_otps" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update me-2">Save</a>
                                    <a class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection