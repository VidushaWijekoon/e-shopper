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

<div class="row">

    <div class="col-md-9">
        <div class="card">
            <div class="card-header" style="background: #222e3c">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 style="color: #e9ecef">Create Slider</h4>
                </span>
            </div>

            <div class="card-body">

                <form action="{{ route('admin.slider') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Title" class="form-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" placeholder="Slider Title" name="title">
                            @error('title') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="Slug" class="form-label">Slug
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Slug" class="form-control" placeholder="Slider Slug" name="slug">
                            @error('slug') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Short Description" class="form-label">Short Description
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Short Description" class="form-control"
                                placeholder="Short Description" name="short_description">
                            @error('short_description') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Price" class="form-label">Price
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" id="Price" class="form-control" placeholder="Price" name="price">
                            @error('price') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="Image" class="form-control" name="image"
                                accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                            @error('image') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Status
                                <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="visible" value="0">
                                    <label class="form-check-label" for="visible">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="1">
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                            </div>
                        </div>
                        @error('status') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                    </div>

                    <hr class="mb-3 mt-4">

                    <button type="submit" class="btn btn-sm btn-info float-end">Create New Slider</button>

                </form>

            </div>

        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header" style="background: #222e3c">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 style="color: #e9ecef">Current Sliders</h4>
                </span>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    @forelse ($sliders as $sliderItems)
                    <div class="d-flex justify-content-between mb-3">

                        <span class="d-flex align-items-center text-capitalize">{{ $sliderItems->title }}</span>
                        <span>
                            <img src="{{ asset($sliderItems->image) }}" alt="{{$sliderItems->title}}" height="100"
                                width="100">
                        </span>

                    </div>
                    @empty
                    <span>No Slider Found</span>
                    @endforelse
                </div>
            </div>

        </div>
    </div>

</div>

@endsection