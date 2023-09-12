@extends('admin.master');
@section('title', 'Admin-setting-email')
@section('content')

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">Email Settings</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">PHP Mail</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Email From Email</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email From Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Username</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Password</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-primary">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-heads">
                                    <h4 class="card-title">SMTP </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>From Email</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email From Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>SMTP Host</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>SMTP Port</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <select class="form-control select">
                                        <option>Select Mail Encryption</option>
                                        <option>Mail Encryption</option>
                                        <option>Encryption</option>
                                    </select>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-primary">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

    