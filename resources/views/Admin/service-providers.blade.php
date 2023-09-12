@extends('admin.master');
@section('title', 'Admin-wallet')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Service Providers</h3>
                        </div>
                        <div class="col-auto text-end">
                            <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                                <i class="fas fa-filter"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="card filter-card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <form>
                            <div class="row filter-row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Provider</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Provider Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Reg Date</th>
                                                <th>Subscription</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-01.jpg')}}">
                                                        </a>
                                                        <a href="#">Thomas Herzberg</a>
                                                    </h2>
                                                </td>
                                                <td>832-212-0082</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f2869a9d9f93819a97808890978095b2978a939f829e97dc919d9f">[email&#160;protected]</a></td>
                                                <td>12 Sep 2020</td>
                                                <td>Enterprice</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-02.jpg')}}">
                                                        </a>
                                                        <a href="#">Matthew Garcia</a>
                                                    </h2>
                                                </td>
                                                <td>918-454-4561</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e78a8693938f8290808695848e86a7829f868a978b82c984888a">[email&#160;protected]</a></td>
                                                <td>7 Sep 2020</td>
                                                <td>Standard</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-03.jpg')}}">
                                                        </a>
                                                        <a href="#">Yolanda Potter</a>
                                                    </h2>
                                                </td>
                                                <td>360-281-3619</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a4355565b545e5b4a554e4e5f487a5f425b574a565f14595557">[email&#160;protected]</a></td>
                                                <td>20 Aug 2020</td>
                                                <td>Basic</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-04.jpg')}}">
                                                        </a>
                                                        <a href="#">Ricardo Flemings</a>
                                                    </h2>
                                                </td>
                                                <td>631-374-3243</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="780a111b190a1c171e141d1511161f0b381d00191508141d561b1715">[email&#160;protected]</a></td>
                                                <td>15 Aug 2020</td>
                                                <td>Standard</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-05.jpg')}}">
                                                        </a>
                                                        <a href="#">Maritza Wasson</a>
                                                    </h2>
                                                </td>
                                                <td>979-844-9766</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d202c3f2439372c3a2c3e3e22230d28352c203d2128632e2220">[email&#160;protected]</a></td>
                                                <td>1 Aug 2020</td>
                                                <td>Basic</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-06.jpg')}}">
                                                        </a>
                                                        <a href="#">Marya Ruiz</a>
                                                    </h2>
                                                </td>
                                                <td>814-537-9709</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="355854474c5447405c4f75504d54584559501b565a58">[email&#160;protected]</a></td>
                                                <td>24 Jul 2020</td>
                                                <td>Enterprice</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-07.jpg')}}">
                                                        </a>
                                                        <a href="#">Richard Hughes</a>
                                                    </h2>
                                                </td>
                                                <td>937-846-6789</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5a7bcb6bdb4a7b1bda0b2bdb0a695b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</a></td>
                                                <td>21 Jul 2020</td>
                                                <td>Standard</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-08.jpg')}}">
                                                        </a>
                                                        <a href="#">Nina Wilson</a>
                                                    </h2>
                                                </td>
                                                <td>419-523-6835</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f09e999e9187999c839f9eb09588919d809c95de939f9d">[email&#160;protected]</a></td>
                                                <td>7 Jul 2020</td>
                                                <td>Basic</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-09.jpg')}}">
                                                        </a>
                                                        <a href="#">David Morrison</a>
                                                    </h2>
                                                </td>
                                                <td>703-214-9351</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="721613041b161f1d00001b011d1c32170a131f021e175c111d1f">[email&#160;protected]</a></td>
                                                <td>30 Jun 2020</td>
                                                <td>Enterprice</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-10.jpg')}}">
                                                        </a>
                                                        <a href="#">Linda Brooks</a>
                                                    </h2>
                                                </td>
                                                <td>512-243-2686</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="197570777d787b6b7676726a597c61787469757c377a7674">[email&#160;protected]</a></td>
                                                <td>28 Jun 2020</td>
                                                <td>Basic</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        @endsection