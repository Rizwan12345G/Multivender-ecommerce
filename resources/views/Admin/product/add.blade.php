@extends('admin.master')
@section('title', 'Admin - Add Product')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Add Product</h3>
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
                            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Product Title</label>
                                    <input class="form-control" name="name" type="text" value="{{ old('title') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="category_id">
                                        <option value="" disabled selected>Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input class="form-control" name="quantity" type="number"
                                        value="{{ old('quantity') }}">
                                    @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" name="price" type="number" step="0.01"
                                        value="{{ old('price') }}">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Discount (%)</label>
                                    <input class="form-control" name="discount" type="number" step="0.01"
                                        value="{{ old('discount') }}">
                                    @error('discount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Product Image</label>
                                    <input class="form-control" name="img" type="file">
                                    @error('img')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Add Product</button>
                                    <a href="{{ route('admin.product.all') }}" class="btn btn-link">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
