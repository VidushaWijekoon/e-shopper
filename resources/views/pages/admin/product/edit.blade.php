@extends('layouts.admin.app')
@section('title', 'Edit Product')
@section('content')

@if (session('message'))
<div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message')}}</div>
@endif

@if ($errors->any())
<div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
    @foreach ($errors->all() as $error)
    <div class="">{{ $error }}</div>
    @endforeach
</div>
@endif
<form action="{{ url('admin/product/' . $product->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white" style="background: #222e3c">
                    Product Details
                </div>

                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Category" class="form-label">Category
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="category_id">
                                <option selected class="text-capitalize" value="{{ $product->category->id }}">
                                    {{
                                    ucfirst($product->category->title) }}
                                </option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" value="{{ ucfirst($product->title) }}"
                                name="title">
                            @error('title') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" value="{{ ucfirst($product->name) }}"
                                name="name">
                            @error('name') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Slug
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" value="{{ ucfirst($product->slug) }}"
                                name="slug">
                            @error('slug') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Brand
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="brand_id">
                                <option selected value="{{ $product->brand->id }}">{{ ucfirst($product->brand->title) }}
                                </option>
                                @foreach ($brand as $brand)
                                <option value="{{ $brand->id }}">{{ ucfirst($brand->title) }}</option>
                                @endforeach
                            </select>
                            @error('brand_id') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Infomation
                                <span class="text-danger">*</span>
                            </label>
                            <textarea id="" rows="3" name="product_information"
                                class="form-control">{{ ucfirst($product->product_information) }}</textarea>
                            @error('product_information') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Additional Information
                                <span class="text-danger">*</span>
                            </label>
                            <textarea id="" rows="3" name="additional_information"
                                class="form-control">{{ ucfirst($product->additional_information) }}</textarea>
                            @error('additional_information') <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Short Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea id="" rows="3" name="short_description"
                                class="form-control">{{ ucfirst($product->short_description) }}</textarea>
                            @error('short_description') <span class="text-danger mt-1">{{ $message }}</span> @enderror
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
                        <div class="col-md-12 col-sm-12 mt-2">
                            @if ($product->productImages)
                            @foreach ($product->productImages as $image)
                            <img src="{{ asset($image->image) }}" alt="{{ $image->id }}" width="80" class="mx-3">
                            <a href="{{ url('admin/product-image/' . $image->id . '/delete') }}"
                                onclick="return confirm('are you surely want to delete this image {{ $image->id }}')">
                                <i class="fa-solid fa-xmark text-danger" style="position: absolute; top: 45%"></i>
                            </a>
                            @endforeach
                            @else
                            <span>No Images Found</span>
                            @endif
                        </div>
                        <input type="file" id="Image" class="form-control mt-3" multiple name="image[]"
                            accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
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
                                <input type="text" id="Title"
                                    class="form-control form-control-sm w-25 mx-4 text-capitalize"
                                    value="{{ $colour->colour->title }}">
                            </div>
                            <div class="d-flex">
                                <label for="Title" class="form-label mt-1">Quantity: </label>
                                <input type="text" id="Title"
                                    class="form-control form-control-sm w-25 mx-2 text-capitalize"
                                    value="{{ $colour->quantity }}">
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
                            <label for="Title" class="form-label">Product Original price
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" id="Title" class="form-control"
                                value="{{ ucfirst($product->product_original_price) }}" name="product_original_price">
                            @error('product_original_price') <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Selling price
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" id="Title" class="form-control"
                                value="{{ ucfirst($product->product_selling_price) }}" name="product_selling_price"
                                min="0">
                            @error('product_selling_price') <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Discount Percent
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" id="Title" class="form-control"
                                value="{{ ucfirst($product->product_discount_percent) }}"
                                name="product_discount_percent" min="0">
                            @error('product_discount_percent') <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Quantity
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" id="Title" class="form-control"
                                value="{{ ucfirst($product->product_quantity) }}" name="product_quantity" min="0">
                            @error('product_quantity') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Tranding
                                <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                @if ($product->tranding == '0')
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tranding" id="visible" value="0"
                                        checked>
                                    <label class="form-check-label" for="visible">Traning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tranding" id="inlineRadio2"
                                        value="1">
                                    <label class="form-check-label" for="inlineRadio2">Not Tranding</label>
                                </div>
                                @elseif($product->tranding == '1')
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tranding" id="visible" value="0">
                                    <label class="form-check-label" for="visible">Traning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tranding" id="inlineRadio2"
                                        value="1" checked>
                                    <label class="form-check-label" for="inlineRadio2">Not Tranding</label>
                                </div>
                                @endif

                            </div>
                        </div>
                        @error('tranding') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Status
                                <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                @if($product->status == '0')
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="visible" value="0"
                                        checked>
                                    <label class="form-check-label" for="visible">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="1">
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                                @elseif($product->status == '1')
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="visible" value="0">
                                    <label class="form-check-label" for="visible">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="1" checked>
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                                @endif
                            </div>
                        </div>
                        @error('status') <span class="text-danger mt-1">{{ $message }}</span> @enderror
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
                            <label for="Title" class="form-label">Product Meta Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control"
                                value="{{ ucfirst($product->product_meta_title) }}" name="product_meta_title">
                            @error('product_meta_title') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Meta keywords
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control"
                                value="{{ ucfirst($product->product_meta_title) }}" name="product_meta_keyword">
                            @error('product_meta_keyword') <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Product Meta Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea id="" rows="3" class="form-control"
                                name="product_meta_description">{{ ucfirst($product->product_meta_description) }}</textarea>
                            @error('product_meta_description') <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-sm btn-primary">Update Product</button>
        </div>

    </div>
</form>

@endsection