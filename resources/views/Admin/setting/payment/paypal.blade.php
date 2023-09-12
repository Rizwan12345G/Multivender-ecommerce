@extends('admin.master');
@section('title', 'Admin-setting-payment-paypal')

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
                    <li class="nav-item active">
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
                                    <h4 class="card-title">Paypal</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="paypal" class="check" type="checkbox" checked="">
                                            <label for="paypal" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label class="d-block">Paypal Option </label>
                                    <div class="custom-control custom-radios custom-control-inline">
                                        <input class="custom-control-input" id="sandbox" type="radio" name="mail_config" value="phpmail" checked>
                                        <label class="custom-control-label" for="sandbox">Sandbox</label>
                                    </div>
                                    <div class="custom-control custom-radios custom-control-inline">
                                        <input class="custom-control-input" id="live" type="radio" name="mail_config" value="smtp">
                                        <label class="custom-control-label" for="live">Live</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Braintree Tokenization key </label>
                                    <input type="text" class="form-control" value="sandbox_pgjcppvdsds_pd6gznv7zbrx9hb8">
                                </div>
                                <div class="form-group">
                                    <label>Braintree Merchant ID</label>
                                    <input type="text" class="form-control" value="pd6gznvs7zbrx9hb8">
                                </div>
                                <div class="form-group">
                                    <label> Braintree Public key </label>
                                    <input type="text" class="form-control" value="h8bydrzs7gcjkp7d4">
                                </div>
                                <div class="form-group">
                                    <label> Braintree Public key </label>
                                    <input type="text" class="form-control" value="h8bydrzs7gcjkp7d4">
                                </div>
                                <div class="form-group">
                                    <label>Braintree Private key </label>
                                    <input type="text" class="form-control" value="sandbox_pgsjcppvs_pd6gznv7zbrx9hb8">
                                </div>
                                <div class="form-group">
                                    <label> Paypal APP ID</label>
                                    <input type="text" class="form-control" value="pd6gznsv7zbrx9hb8">
                                </div>
                                <div class="form-group">
                                    <label> Paypal Secret Key </label>
                                    <input type="text" class="form-control" value="h8bydrzs7gcjkp7d4">
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