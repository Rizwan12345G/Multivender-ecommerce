 
 @extends('admin.master');
@section('title', 'Admin-setting-theme')

@section('content')

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="page-title">Theme Color Change</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-radios custom-control-inline ">
                                        <input class="custom-control-input" id="defultcolor" type="radio" name="color" checked>
                                        <label class="custom-control-label d-flex align-item-center" for="defultcolor"><span class="color-set clr-default"></span>Default</label>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="custom-control custom-radios custom-control-inline ">
                                        <input class="custom-control-input" id="oranagecolor" type="radio" name="color">
                                        <label class="custom-control-label d-flex align-item-center" for="oranagecolor"><span class="color-set clr-orange"></span>Orange</label>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="custom-control custom-radios custom-control-inline ">
                                        <input class="custom-control-input" id="bluecolor" type="radio" name="color">
                                        <label class="custom-control-label d-flex align-item-center" for="bluecolor"><span class="color-set clr-blue"></span>Blue</label>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="custom-control custom-radios custom-control-inline ">
                                        <input class="custom-control-input" id="redcolor" type="radio" name="color">
                                        <label class="custom-control-label d-flex align-item-center" for="redcolor"><span class="color-set clr-red"></span>Red</label>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="custom-control custom-radios custom-control-inline ">
                                        <input class="custom-control-input" id="greencolor" type="radio" name="color">
                                        <label class="custom-control-label d-flex align-item-center" for="greencolor"><span class="color-set clr-green"></span>Green</label>
                                    </div>
                                </div>
                                <div class="form-groupbtn">
                                    <a class="btn btn-update">Color Change</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
 
 