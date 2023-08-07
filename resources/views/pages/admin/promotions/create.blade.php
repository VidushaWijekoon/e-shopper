@extends('layouts.admin.app')
@section('title', 'Create New Promotion')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Create New Promotion</h4>
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

                    <form action="{{ route('admin.promotion.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Title" class="form-label">{{ __('Title') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" placeholder="Promotion Title"
                                    name="title">
                                @error('title')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Slug" class="form-label">{{ __('Slug') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Slug" class="form-control" placeholder="Promotion Slug"
                                    name="slug">
                                @error('slug')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col md-12">
                                <label for="Slug" class="form-label">{{ __('Promotion Description') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea type="text" id="Slug" class="form-control" rows="3" placeholder="Promotion Description"
                                    name="description"></textarea>
                                @error('description')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="promotion_starting_date" class="form-label">{{ __('Starting Date') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="promotion_starting_date" class="form-control"
                                    placeholder="Promotion Starting Date" name="promotion_starting_date">
                                @error('promotion_starting_date')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="promotion_ends_at" class="form-label">{{ __('Ends At') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="promotion_ends_at" class="form-control"
                                    placeholder="Promotion Starting Date" name="promotion_ends_at">
                                @error('promotion_ends_at')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="promotion_discount" class="form-label">{{ __('Promotion Discount') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="promotion_discount" class="form-control"
                                    placeholder="Promotion Discount" name="promotion_discount" min="0">
                                @error('promotion_discount')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="promotion_price" class="form-label">{{ __('Promotion Price') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="promotion_price" class="form-control"
                                    placeholder="Promotion Price" name="promotion_price" min="0">
                                @error('promotion_price')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12">
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

                        <hr class=" mb-3 mt-4">

                        <button type="submit" class="btn btn-sm btn-info float-end">Create New Promotion</button>

                    </form>

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Existing Promotion</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
