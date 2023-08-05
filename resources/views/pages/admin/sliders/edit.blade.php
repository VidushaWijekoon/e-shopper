@extends('layouts.admin.app')
@section('title', 'Create Sliders')
@section('content')

    @if ($errors->any())
        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
            @foreach ($errors->all() as $error)
                <div class="">{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div class="row justify-content-center">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Edit Slider {{ $slider->title }}</h4>
                    </span>
                </div>

                <div class="card-body">

                    <form action="{{ url('admin/slider/' . $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Title" class="form-label">Title
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" value="{{ $slider->title }}"
                                    name="title">
                                @error('title')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Slug" class="form-label">Slug
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Slug" class="form-control" value="{{ $slider->title }}"
                                    name="slug">
                                @error('slug')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Short Description" class="form-label">Short Description
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Short Description" class="form-control"
                                    value="{{ $slider->short_description }}" name="short_description">
                                @error('short_description')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Price" class="form-label">Price
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="Price" class="form-control" value="{{ $slider->price }}"
                                    name="price" min="0">
                                @error('price')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="Image" class="form-label">Image
                                    <span class="text-danger">*</span>
                                </label>
                                <img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}" width="100"
                                    height="100">
                                <input type="file" id="Image" class="form-control" name="image"
                                    accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                                @error('image')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <hr class="mb-3 mt-4">

                        <button type="submit" class="btn btn-sm btn-info float-end">Edit Slider</button>

                    </form>

                </div>

            </div>
        </div>

    </div>

@endsection
