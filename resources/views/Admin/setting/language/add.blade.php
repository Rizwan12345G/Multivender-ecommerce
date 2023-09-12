 
@extends('admin.master');
@section('title', 'Admin-setting-language-add')

@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">

                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title">Add Language</h3>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="categories.html">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="english">
                                    </div>
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input class="form-control" type="text" placeholder="en">
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block"> Status</label>
                                        <div class="form-check form-check-inline form-radio">
                                            <input class="form-check-input" type="radio" value="" id="language_active" checked>
                                            <label class="form-check-label" for="language_active">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-radio">
                                            <input class="form-check-input" type="radio" value="" id="language_inactive">
                                            <label class="form-check-label" for="language_inactive">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="language-settings.html" class="btn btn-link">Cancel</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
  

    