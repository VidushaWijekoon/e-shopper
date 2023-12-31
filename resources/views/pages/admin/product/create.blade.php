@extends('layouts.admin.app')
@section('title', 'Create Product')
@section('content')

    @if ($errors->any())
        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
            @foreach ($errors->all() as $error)
                <div class="">{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form action="{{ route('admin.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                                <select class="form-select  form-control" name="category_id">
                                    <option selected>Please Select Brand</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Title
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" placeholder="Product Title"
                                    name="title">
                                @error('title')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="SKU Number" class="form-label">SKU Number
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="SKU Number" class="form-control" placeholder="SKU Number"
                                    name="sku_number">
                                @error('sku_number')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Product Reference Number" class="form-label">Product Reference Number
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Product Reference Number" class="form-control"
                                    placeholder="Product Reference Number" name="product_reference_number">
                                @error('product_reference_number')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" placeholder="Product Title"
                                    name="name">
                                @error('name')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Slug
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control" placeholder="Product Title"
                                    name="slug">
                                @error('slug')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Brand
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select  form-control" name="brand_id">
                                    <option selected>Please Select Brand</option>
                                    @foreach ($brand as $brand)
                                        <option value="{{ $brand->id }}">{{ ucfirst($brand->title) }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Infomation
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea id="" rows="3" name="product_information" class="form-control"
                                    placeholder="Product Information"></textarea>
                                @error('product_information')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Additional Information
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea id="" rows="3" name="additional_information" class="form-control"
                                    placeholder="Additiona Information"></textarea>
                                @error('additional_information')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Short Description
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea id="" rows="3" name="short_description" class="form-control"
                                    placeholder="Short Description"></textarea>
                                @error('short_description')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
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
                            <div class="col-md-12 col-sm-12">
                                <label for="Image" class="form-label">Image
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="file" id="Image" class="form-control" multiple name="image[]"
                                    accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg" required>
                                @error('image')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-white" style="background: #222e3c">
                        Product Colors
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="row">
                                @forelse ($colors as $colorItem)
                                    <div class="col-md-6">
                                        <div class="p-2 mb-3">
                                            <div class="d-flex">
                                                <div class="mb-2 mt-2">Colour:</div>
                                                <input type="checkbox" name="colors[{{ $colorItem->id }}]"
                                                    value="{{ $colorItem->id }}" class="mx-2" />
                                                <span class="mt-2">{{ $colorItem->title }}</span>

                                            </div>

                                            <br>
                                            <div class="d-flex">
                                                <div class="">Quantity:</div>
                                                <input type="number" class="mx-2" min="0"
                                                    name="colorquantity[{{ $colorItem->id }}]"
                                                    style="width: 70px; border: 1px soild black">
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <span>No Colors Found</span>
                                @endforelse

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
                                    placeholder="Product Original price" name="product_original_price">
                                @error('product_original_price')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Selling price
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="Title" class="form-control"
                                    placeholder="Product Selling price" name="product_selling_price" min="0">
                                @error('product_selling_price')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Discount Percent
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="Title" class="form-control"
                                    placeholder="Product Discount Percent" name="product_discount_percent"
                                    min="0">
                                @error('product_discount_percent')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Quantity
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="Title" class="form-control" placeholder="Product Quantity"
                                    name="product_quantity" min="0">
                                @error('product_quantity')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="Image" class="form-label">Tranding
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tranding" id="visible"
                                            value="0">
                                        <label class="form-check-label" for="visible">Traning</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tranding" id="inlineRadio2"
                                            value="1">
                                        <label class="form-check-label" for="inlineRadio2">Not Tranding</label>
                                    </div>
                                </div>
                            </div>
                            @error('tranding')
                                <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
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
                                    placeholder="Product Meta Title" name="product_meta_title">
                                @error('product_meta_title')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Meta keywords
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="Title" class="form-control"
                                    placeholder="Product Meta keywords" name="product_meta_keyword">
                                @error('product_meta_keyword')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Title" class="form-label">Product Meta Description
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea id="" rows="3" class="form-control" name="product_meta_description"></textarea>
                                @error('product_meta_description')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-white" style="background: #222e3c">
                        Additonal Important Informations (Add All the Additional Details Including (Height/Width/Weight))
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="emptbl" class="table table-bordered table-hover">


                                <tbody id="tbody">

                                </tbody>
                            </table>
                        </div>

                        <table class="mb-3 mx-auto">
                            <tr class="">
                                <td>
                                    <input type="button" value="Add Container" onclick="addItem()"
                                        class="btn btn-sm btn-primary mx-2 text-white" />
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Create New Product</button>
            </div>

        </div>
    </form>

@endsection

<script>
    var items = 0;

    function addItem() {
        items++;

        var html = "<tr>";
        html += "<td>" + items + "</td>";
        html +=
            '<td><textarea name="marks_and_nos_container_and_seals[]" class="form-control form-control-sm" rows="1" required></textarea></td>';
        html +=
            '<td><textarea name="no_and_kind_of_packages[]" class="form-control form-control-sm" rows="1" required></textarea></td>';
        html +=
            "<td><button type='button' class='btn btn-sm btn-danger' onclick='deleteRow(this);'>Delete</button></td>";
        html += "</tr>";

        var row = document.getElementById("tbody").insertRow();
        row.innerHTML = html;
    }

    function deleteRow(button) {
        items--;
        button.parentElement.parentElement.remove();
    }
</script>
