@extends('layouts.admin.app')
@section('title', 'Show Offer')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">Show Offer</h4>
                    </span>
                </div>

                <div class="card-body">

                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Title" class="form-label">{{ __('Title') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" value={{ $offer->title }}
                                    name="title">

                            </div>
                            <div class="col-md-6">
                                <label for="Slug" class="form-label">{{ __('Slug') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Slug" class="form-control" value={{ $offer->slug }}
                                    name="slug">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col md-12">
                                <label for="Slug" class="form-label">{{ __('Offer Description') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea type="text" id="Slug" class="form-control" rows="3" value="Offer Description"
                                    name="description">{{ $offer->description }}</textarea>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="offer" class="form-label">{{ __('Starting Date') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="offer_starting_date" class="form-control"
                                    value={{ $offer->offer_starting_date }} name="offer_starting_date">

                            </div>
                            <div class="col-md-6">
                                <label for="offer_ends_at" class="form-label">{{ __('Ends At') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="offer_ends_at" class="form-control"
                                    value={{ $offer->offer_ends_at }} name="offer_ends_at">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="offer_discount" class="form-label">{{ __('Offer Discount') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="offer_discount" class="form-control"
                                    value={{ $offer->offer_discount }} name="offer_discount" min="0">

                            </div>
                            <div class="col-md-6">
                                <label for="offer_price" class="form-label">{{ __('Offer Price') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="offer_price" class="form-control" value={{ $offer->offer_price }}
                                    name="offer_price" min="0">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="Image" class="form-label">Image
                                    <span class="text-danger">*</span>
                                </label>
                                <img src={{ asset($offer->image) }} alt={{ $offer->title }}>

                            </div>
                        </div>

                        <hr class=" mb-3 mt-4">

                        <button type="submit" class="btn btn-sm btn-info float-end">Create New Offer</button>

                    </form>

                </div>

            </div>
        </div>

    </div>
@endsection
