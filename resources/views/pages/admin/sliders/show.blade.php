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
                        <h4 style="color: #e9ecef">Create Slider</h4>
                    </span>
                </div>

                <div class="card-body">


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Title" class="form-label">Title</label>
                            <input type="text" id="Title" class="form-control" value="{{ $slider->title }}" disabled
                                readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="Slug" class="form-label">Slug</label>
                            <input type="text" id="Slug" class="form-control" value="{{ $slider->title }}" disabled
                                readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Short Description" class="form-label">Short Description</label>
                            <input type="text" id="Short Description" class="form-control"
                                value="{{ $slider->short_description }}" disabled readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Price" class="form-label">Price</label>
                            <input type="number" id="Price" class="form-control" value="{{ $slider->price }}" disabled
                                readonly>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Image</label>
                            <img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}" class="d-block" width="100"
                                height="100">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Status</label>
                            <div class="">
                                @if ($slider->status = '0')
                                    <div class="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="visible"
                                                value="0" checked disabled>
                                            <label class="form-check-label" for="visible">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="0" disabled>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                        </div>
                                    </div>
                                @elseif($slider->status = '1')
                                    <div class="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="visible"
                                                value="0" disabled>
                                            <label class="form-check-label" for="visible">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="0" checked disabled>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <hr class="mb-3 mt-4">



                </div>

            </div>
        </div>


    </div>


@endsection
