@extends('layouts.admin.app')
@section('title', 'Edit Category')
@section('content')
<div class="row">

    <div class="col-md-9">
        <div class="card">
            <div class="card-header" style="background: #222e3c">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="text-capitalize" style="color: #e9ecef">Edit Category {{ $categories->title }}</h4>
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

                <form action="{{ url('admin/category/' . $categories->id ) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Title" class="form-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" value="{{ $categories->title }}"
                                name="title">
                            @error('title') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="Slug" class="form-label">Slug
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Slug" class="form-control" value="{{ $categories->slug }}"
                                name="slug">
                            @error('slug') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col md-12">
                            <label for="Slug" class="form-label">Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" id="Slug" class="form-control" rows="3"
                                name="description">{{ $categories->description }}</textarea>
                            @error('description') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="Image" class="form-control" name="image"
                                accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                            <img src="{{ asset($categories->image) }}" alt="{{ $categories->title  }}" class="mt-2"
                                style="width: 150px; display: block;">
                            @error('image') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <hr class=" mb-3 mt-4">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Title" class="form-label">Meta Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" value="{{ $categories->meta_title }}"
                                name="meta_title">
                            @error('meta_title') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="Keyword" class="form-label">Meta Keyword
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Slug" class="form-control" value="{{ $categories->meta_keyword }}"
                                name="meta_keyword">
                            @error('meta_keyword') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col md-12">
                            <label for="Slug" class="form-label">Meta Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" id="Slug" class="form-control" rows="3"
                                name="meta_description">{{ $categories->meta_description }}</textarea>
                            @error('meta_description') <span class="text-danger text-capitalize">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <hr class="mb-3 mt-4">

                    <button type="submit" class="btn btn-sm btn-info float-end">Update Category</button>

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
                    @forelse ($allCateogry as $categoryItem)
                    <div class="d-flex justify-content-between">

                        <span class="d-flex align-items-center text-capitalize">{{ $categoryItem->title }}</span>
                        <span>
                            <img src="{{ asset($categoryItem->image) }}" alt="{{$categoryItem->title}}" height="50">
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