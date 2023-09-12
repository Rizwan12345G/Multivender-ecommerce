@extends('admin.master');
@section('title', 'Admin-add-category')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">

                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Add Category</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.category.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="name" type="text">
                                    @error('name')
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input class="form-control" name="img" type="file">
                                    @error('img')
                                        <span class="text-danger">{{ $errors->first('img') }}</span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Add Category</button>
                                    <a href="{{ route('admin.category.all') }}" class="btn btn-link">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
