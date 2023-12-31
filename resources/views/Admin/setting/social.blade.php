@extends('admin.master');
@section('title', 'Admin-setting-social')
@section('content')

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">Social Settings</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">Login Settings (one time setup):</h4>
                                    <div class="col-auto">
                                        <div class="status-toggle">
                                            <input id="default_otps" class="check" type="checkbox" checked="">
                                            <label for="default_otps" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Login Type</label>
                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-radios custom-control-inline">
                                            <input class="custom-control-input" id="phpmail" type="radio" name="mail_config" value="phpmail" checked>
                                            <label class="custom-control-label" for="phpmail">Mobile No</label>
                                        </div>
                                        <div class="custom-control custom-radios custom-control-inline">
                                            <input class="custom-control-input" id="chkYes" type="radio" name="mail_config" value="smtp">
                                            <label class="custom-control-label" for="chkYes">Email ID</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>OTP By</label>
                                    <div class="form-group">
                                        <div class="custom-control custom-radios custom-control-inline">
                                            <input class="custom-control-input" id="phpmails" type="radio" name="mail_configs" value="phpmail">
                                            <label class="custom-control-label" for="phpmails">SMS</label>
                                        </div>
                                        <div class="custom-control custom-radios custom-control-inline">
                                            <input class="custom-control-input" id="smtpmails" type="radio" name="mail_configs" value="smtp" checked="">
                                            <label class="custom-control-label" for="smtpmails">Mail</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-5">
                                    <div class="form-groupbtn">
                                        <ul>
                                            <li>
                                                <a class="btn btn-update">Update</a>
                                            </li>
                                            <li>
                                                <a class="btn btn-cancel">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="showemail" style="display: none;">
                    <div class="row">
                        <div class=" col-lg-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-heads">
                                        <h4 class="card-title">Google Login Credential</h4>
                                        <div class="col-auto">
                                            <div class="status-toggle">
                                                <input id="default_ot" class="check" type="checkbox" checked="">
                                                <label for="default_ot" class="checktoggle">checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Client ID</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Client Secret</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group ">
                                        <div class="form-groupbtn">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-primary">Save</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-heads">
                                        <h4 class="card-title">Twiter Login Credential</h4>
                                        <div class="col-auto">
                                            <div class="status-toggle">
                                                <input id="default_o" class="check" type="checkbox">
                                                <label for="default_o" class="checktoggle">checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Client ID</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Client Secret</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group ">
                                        <div class="form-groupbtn">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-primary">Save</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-lg-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-heads">
                                        <h4 class="card-title">Facebook</h4>
                                        <div class="col-auto">
                                            <div class="status-toggle">
                                                <input id="default" class="check" type="checkbox" checked>
                                                <label for="default" class="checktoggle">checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>App ID</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>App Secret</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group ">
                                        <div class="form-groupbtn">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-primary">Save</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection