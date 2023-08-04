@extends('layouts.admin.app')
@section('title', 'Create Brand')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Create New Brand</h4>
                    </span>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.brand.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Category" class="form-label">Category
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-control" name="category_id">
                                    <option selected>Please Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" class="text-capitalize">{{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Title
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" placeholder="Brand Title"
                                    name="title">
                                @error('title')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Slug" class="form-label">Slug
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Slug" class="form-control" placeholder="Brand Slug"
                                    name="slug">
                                @error('slug')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 col-sm-12">
                                <label for="Image" class="form-label">Image
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="file" id="Image" class="form-control" name="image"
                                    accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                                @error('image')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col md-12">
                                <label for="Slug" class="form-label">Description
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea type="text" id="Slug" class="form-control" rows="3" placeholder="Brand Description"
                                    name="description"></textarea>
                                @error('description')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <hr class=" mb-3 mt-4">

                        <button type="submit" class="btn btn-sm btn-info float-end">Create New Brand</button>

                    </form>

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Existing Category</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        @forelse ($brand as $categoryItem)
                            <div class="d-flex justify-content-between">

                                <span class="d-flex align-items-center text-capitalize"
                                    style="font-weight: bold; font-size: 16px">{{ $categoryItem->title }}</span>
                                <span class="mt-3">
                                    <img src="{{ asset($categoryItem->image) }}" alt="{{ $categoryItem->title }}"
                                        height="50">
                                </span>

                            </div>
                        @empty
                            <span>No Category Has Been Created</span>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
