@extends('admin.master');
@section('title', 'Admin-subscription-add')

@section('content')

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">

                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Add Subscription</h3>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="subscriptions.html">
                                    <div class="form-group">
                                        <label>Subscription Name</label>
                                        <input class="form-control" type="text" placeholder="Free Trial">
                                    </div>
                                    <div class="form-group">
                                        <label>Subscription Amount</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Subscription Durations</label>
                                        <select class="form-control select">
                                            <option>Select Duration</option>
                                            <option>One Month</option>
                                            <option>3 Months</option>
                                            <option>6 Months</option>
                                            <option>One Year</option>
                                            <option>2 Years</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Subscription Status</label>
                                        <div class="form-check form-check-inline form-radio">
                                            <input class="form-check-input" type="radio" value="" id="subscription_active" checked>
                                            <label class="form-check-label" for="subscription_active">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-radio">
                                            <input class="form-check-input" type="radio" value="" id="subscription_inactive">
                                            <label class="form-check-label" for="subscription_inactive">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="subscriptions.html" class="btn btn-link">Cancel</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @endsection