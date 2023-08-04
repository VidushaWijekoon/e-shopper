@extends('layouts.admin.app')
@section('title', 'View brand')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ $brand->title }} : brand</h4>
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

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Category" class="form-label">Category
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control"
                                value="{{ $brand->categories->title }}" readonly disabled>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" value="{{ $brand->title }}" readonly
                                disabled>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12 col-sm-12">
                            <label for="Image" class="form-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <img src="{{ asset($brand->image) }}" alt="image{{ $brand->title }}" class="  d-block"
                                style="width: 100px; height: 35px">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Slug" class="form-label">Slug
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Slug" class="form-control" value="{{ $brand->slug }}" readonly
                                disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col md-12">
                            <label for="Slug" class="form-label">Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" id="Slug" class="form-control" rows="3" readonly disabled> {{ $brand->description }}</textarea>

                        </div>
                    </div>

                    <hr class=" mb-3 mt-4">

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Existing Brand</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        @forelse ($allBrand as $brandItem)
                            <div class="d-flex justify-content-between">

                                <span class="d-flex align-items-center text-capitalize"
                                    style="font-weight: bold; font-size: 16px">{{ $brandItem->title }}</span>
                                <span class="mt-3">
                                    <img src="{{ asset($brandItem->image) }}" alt="{{ $brandItem->title }}" height="50">
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
