@extends('layouts.admin.app')
@section('title', 'Show Product')
@section('content')

@if ($errors->any())
<div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
    @foreach ($errors->all() as $error)
    <div class="">{{ $error }}</div>
    @endforeach
</div>
@endif
<div class="row">


    <div class="col-md-6">

        <div class="card">
            <div class="card-header text-white" style="background: #222e3c">
                Product Details
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Category" class="form-label">Category</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->category_id }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Title</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->title }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Name</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->name }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Slug</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->slug }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Brand</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->brand_id }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Infomation</label>
                        <textarea id="" rows="3" class="form-control" readonly
                            disabled>{{ $product->product_information }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Additional Information</label>
                        <textarea id="" rows="3" class="form-control" readonly
                            disabled>{{ $product->additional_information }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Short Description</label>
                        <textarea id="" rows="3" class="form-control" readonly
                            disabled>{{ $product->short_description }}</textarea>
                    </div>
                </div>

            </div>

        </div>

        <div class="card">
            <div class="card-header text-white" style="background: #222e3c">
                Product Images
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="Image" class="form-label">Image</label>
                    <div class="col-md-12 col-sm-12">
                        @if ($product->productImages)
                        @foreach ($product->productImages as $image)
                        <img src="{{ asset($image->image) }}" alt="{{ $image->id }}" width="80" class="mx-3">
                        @endforeach
                        @else
                        <span>No Images Found</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header text-white" style="background: #222e3c">
                Product Colours
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="row">
                        @if ($product->productColour)
                        @foreach ($product->productColour as $colour)
                        <div class="d-flex mb-2">
                            <label for="Title" class="form-label mt-1">Colour: </label>
                            <input type="text" id="Title" class="form-control form-control-sm w-25 mx-4 text-capitalize"
                                value="{{ $colour->colour->title }}" readonly disabled>
                        </div>
                        <div class="d-flex">
                            <label for="Title" class="form-label mt-1">Quantity: </label>
                            <input type="text" id="Title" class="form-control form-control-sm w-25 mx-2 text-capitalize"
                                value="{{ $colour->quantity }}" readonly disabled>
                        </div>
                        @endforeach
                        @else
                        <span>No Colour Found</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-6">

        <div class="card">
            <div class="card-header text-white" style="background: #222e3c">
                Product Pricing
            </div>
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Original price</label>
                        <input type="number" class="form-control" value="{{ $product->product_original_price }}"
                            readonly disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Selling price</label>
                        <input type="number" class="form-control" value="{{ $product->product_selling_price }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Discount Percent</label>
                        <input type="number" class="form-control" value="{{ $product->product_discount_percent }}"
                            readonly disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Quantity</label>
                        <input type="number" class="form-control" value="{{ $product->product_quantity }}" readonly
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="Image" class="form-label">Tranding</label>

                        @if ($product->tranding == '0')
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tranding" id="visible" value="0"
                                    checked disabled>
                                <label class="form-check-label" for="visible">Traning</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tranding" id="inlineRadio2" value="0"
                                    disabled>
                                <label class="form-check-label" for="inlineRadio2">Not Tranding</label>
                            </div>
                        </div>
                        @elseif($product->tranding == '1')
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tranding" id="visible" value="0"
                                    disabled>
                                <label class="form-check-label" for="visible">Traning</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tranding" id="inlineRadio2" value="0"
                                    disabled checked>
                                <label class="form-check-label" for="inlineRadio2">Not Tranding</label>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="Image" class="form-label">Status</label>

                        @if ($product->status = '0')
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="visible" value="0"
                                    checked disabled>
                                <label class="form-check-label" for="visible">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0"
                                    disabled>
                                <label class="form-check-label" for="inlineRadio2">Inactive</label>
                            </div>
                        </div>
                        @elseif($product->status = '1')
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="visible" value="0"
                                    disabled>
                                <label class="form-check-label" for="visible">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0"
                                    checked disabled>
                                <label class="form-check-label" for="inlineRadio2">Inactive</label>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>

        <div class="card">
            <div class="card-header text-white" style="background: #222e3c">
                SEO Tags
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Meta Title</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->product_meta_title }}"
                            name="product_meta_keyword" readonly disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Meta keywords</label>
                        <input type="text" id="Title" class="form-control" value="{{ $product->product_meta_keyword }}"
                            name="product_meta_keyword" readonly disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Title" class="form-label">Product Meta Description</label>
                        <textarea rows="3" class="form-control" disabled
                            readonly>{{ $product->product_meta_description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection