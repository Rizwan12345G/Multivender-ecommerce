@extends('admin.master')
@section('title', 'Admin-category')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Categories</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                        <a href="{{ route('admin.category.show') }}" class="btn btn-primary add-button ms-3">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select">
                                        <option>Select category</option>
                                        <option>Automobile</option>
                                        <option>Construction</option>
                                        <option>Interior</option>
                                        <option>Cleaning</option>
                                        <option>Electrical</option>
                                        <option>Carpentry</option>
                                        <option>Computer</option>
                                    </select>
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
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @forelse ($categories as $category)
                                            <tr>


                                                <td>{{ $i = $i + 1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <img class="rounded service-img me-1"
                                                        src="{{ asset('images/' . $category->img) }}"
                                                        alt="Category Image">
                                                </td>

                                                <td>{{ $category->created_at }}</td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                                        class="btn btn-sm bg-success-light me-2"> <i
                                                            class="far fa-edit me-1"></i> Edit</a>
                                                    <a href="{{ route('admin.category.delete', $category->id) }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"
                                                        class="btn btn-sm bg-danger-light me-2"> <i
                                                            class="fa fa-trash me-1"></i> Delete </a>

                                                    <form id="logout-form"
                                                        action="{{ route('admin.category.delete', $category->id) }}"
                                                        method="POST" class="d-none">
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>There is no category added yet!</tr>
                                        @endforelse
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
