@extends('layouts.admin.app')
@section('title', 'Show Promotion')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Show Promotion</h4>
                    </span>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.promotion.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Title" class="form-label">{{ __('Title') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" value={{ $promotion->title }}>
                            </div>
                            <div class="col-md-6">
                                <label for="Slug" class="form-label">{{ __('Slug') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Slug" class="form-control" value={{ $promotion->slug }}>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col md-12">
                                <label for="Slug" class="form-label">{{ __('Promotion Description') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea type="text" id="Slug" class="form-control" rows="3">{{ $promotion->description }}</textarea>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="promotion_starting_date" class="form-label">{{ __('Starting Date') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="promotion_starting_date" class="form-control"
                                    value={{ $promotion->promotion_starting_date }}>

                            </div>
                            <div class="col-md-6">
                                <label for="promotion_ends_at" class="form-label">{{ __('Ends At') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="promotion_ends_at" class="form-control"
                                    value={{ $promotion->promotion_ends_at }}>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="promotion_discount" class="form-label">{{ __('Promotion Discount') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="promotion_discount" class="form-control"
                                    value={{ $promotion->promotion_discount }}>

                            </div>
                            <div class="col-md-6">
                                <label for="promotion_price" class="form-label">{{ __('Promotion Price') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="promotion_price" class="form-control"
                                    value={{ $promotion->promotion_price }}>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="Image" class="form-label">Image
                                    <span class="text-danger">*</span>
                                </label>
                                <img class="w-100" src={{ asset($promotion->image) }} alt={{ $promotion->title }} />
                            </div>
                        </div>

                        <hr class=" mb-3 mt-4">

                        <button type="submit" class="btn btn-sm btn-info float-end">Create New Promotion</button>

                    </form>

                </div>

            </div>
        </div>

    </div>
@endsection
