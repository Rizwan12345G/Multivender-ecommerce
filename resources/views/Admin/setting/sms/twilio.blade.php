@extends('admin.master');
@section('title', 'Admin-setting-twilio')

@section('content')

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">SMS Gateway</h3>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs menu-tabs">
                    <li class="nav-item ">
                        <a class="nav-link" href="sms-setting.html">Nexmo</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="twilio.html">Twilio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="factor.html">2Factor</a>
                    </li>
                </ul>
                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5>Default OTP</h5>
                                        <p class="mb-0">You can use default otp <strong>1234</strong> for Tom Burns purpose</p>
                                    </div>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="otp" class="check" type="checkbox" checked="">
                                            <label for="otp" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5>Twilio</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="twilio" class="check" type="checkbox" checked="">
                                            <label for="twilio" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Sender ID</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Account SID</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label> AUTH Token</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <div class="form-links">
                                        <label>get your account on<a href="#" target="_blank"> https://developer.vonage.com/</a></label>
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
     