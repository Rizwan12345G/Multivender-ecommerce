@extends('admin.master');
@section('title', 'Admin-setting-payment')

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
                    <li class="nav-item active">
                        <a class="nav-link" href="payment-settings.html">Stripe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="razorpay.html">Razorpay</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paypal.html">Paypal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paystack.html">Paystack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cod.html">COD</a>
                    </li>
                </ul>
                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Stripe</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="stripe" class="check" type="checkbox" checked="">
                                            <label for="stripe" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label class="d-block">Stripe Option </label>
                                    <div class="custom-control custom-radios custom-control-inline">
                                        <input class="custom-control-input" id="sandbox" type="radio" name="stripe" value="phpmail" checked>
                                        <label class="custom-control-label" for="sandbox">Sandbox</label>
                                    </div>
                                    <div class="custom-control custom-radios custom-control-inline">
                                        <input class="custom-control-input" id="live" type="radio" name="stripe" value="smtp">
                                        <label class="custom-control-label" for="live">Live</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Gateway Name </label>
                                    <input type="text" class="form-control" value="Stripe">
                                </div>
                                <div class="form-group">
                                    <label>API Key</label>
                                    <input type="text" class="form-control" value="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
                                </div>
                                <div class="form-group">
                                    <label> Rest Key </label>
                                    <input type="text" class="form-control" value="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3">
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