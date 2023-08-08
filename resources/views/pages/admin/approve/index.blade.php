@extends('layouts.admin.app')
@section('title', 'Approve')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
    @endif

    <div class="title">
        <h2 class="mb-3">{{ __('Waiting for Appproval') }}</h2>
    </div>

    @if ($rowCategoryCount > 0)
        <div class="row">
            <div class="col-md-12">
                <h6>{{ __('Category Need to Approve') }}</h6>
                <div class="card">
                    <div class="card-body mt-2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Created Date') }}</th>
                                        <th>{{ __('Created By') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($categories as $categoryItem)
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>{{ $categoryItem->title }}</td>
                                            <td>{{ $categoryItem->slug }}</td>
                                            <td>Category</td>
                                            <td>{{ $categoryItem->created_at }}</td>
                                            <td>{{ $categoryItem->created_by }}</td>
                                            <td>
                                                @if ($categoryItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill pb-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $categoryItem->id . '/category_approval') }}"
                                                    onclick="return confirm('are you sure you want to approve this category')"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Approve {{ $categoryItem->title }}">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        @if ($rowColorCount > 0)
            <!-- Colors -->
            <div class="col-md-6">
                <h6>{{ __('Colors Need to Approve') }}</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Created Date') }}</th>
                                        <th>{{ __('Created By') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($color as $colorItem)
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>{{ $colorItem->title }}</td>
                                            <td>{{ $colorItem->slug }}</td>
                                            <td>Brand</td>
                                            <td>{{ $colorItem->created_at }}</td>
                                            <td>{{ $colorItem->created_by }}</td>
                                            <td>
                                                @if ($colorItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill p-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $colorItem->id . '/color_approval') }}"
                                                    onclick="return confirm('are you sure you want to approve this brand')">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <span>{{ __('No Brand to Approve') }}</span>
                                    @endforelse

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($rowBrandCount > 0)
            <!-- Colors -->
            <div class="col-md-6">
                <h6>{{ __('Brands Need to Approve') }}</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Created Date') }}</th>
                                        <th>{{ __('Created By') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($brand as $colorItem)
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>{{ $colorItem->title }}</td>
                                            <td>{{ $colorItem->slug }}</td>
                                            <td>Brand</td>
                                            <td>{{ $colorItem->created_at }}</td>
                                            <td>{{ $colorItem->created_by }}</td>
                                            <td>
                                                @if ($colorItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill p-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $colorItem->id . '/brand_approval') }}"
                                                    onclick="return confirm('are you sure you want to approve this brand')">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <span>{{ __('No Brand to Approve') }}</span>
                                    @endforelse

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>

    @if ($rowProductCount > 0)
        <h6>{{ __('Products Need to Approve') }}</h6>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>Original Price</th>
                                        <th>Selling Price</th>
                                        <th>QTY</th>
                                        <th>Tranding</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($product as $key => $productItem)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $productItem->title }}</td>
                                            <td class="text-capitalize">{{ $productItem->category->title }}</td>
                                            <td>{{ $productItem->product_original_price }}</td>
                                            <td>{{ $productItem->product_selling_price }}</td>
                                            <td>{{ $productItem->product_quantity }}</td>
                                            <td>
                                                @if ($productItem->tranding == '0')
                                                    <span class="badge badge-success rounded-pill pb-1 px-2">Tranding</span>
                                                @elseif ($productItem->tranding == '1')
                                                    <span class="badge badge-danger rounded-pill pb-1 px-2">Not
                                                        Tranding</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if ($productItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill p-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $productItem->id . '/product_approval') }}"
                                                    onclick="return confirm('are you sure you want to approve this brand')">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <span>{{ __('No Data Found!') }}</span>
                                    @endforelse
                                </tbody>

                            </table>
                            <div class="d-flex float-end">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($rowSliderCount > 0)
        <h6>{{ __('Slider Need to Approve') }}</h6>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($slider as $key => $sliderItem)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $sliderItem->title }}</td>
                                            <td class="text-capitalize">{{ $sliderItem->title }}</td>
                                            <td>{{ $sliderItem->short_description }}</td>
                                            <td>
                                                <img src="{{ asset($sliderItem->image) }}" alt="{{ $sliderItem->title }}"
                                                    class="d-block" width="100" height="50">
                                            </td>
                                            <td>{{ $sliderItem->price }}</td>
                                            <td>
                                                @if ($sliderItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill p-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $sliderItem->id . '/slider_approval') }}"
                                                    onclick="return confirm('are you sure you want to approve this brand')">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <span>{{ __('No Data Found!') }}</span>
                                    @endforelse
                                </tbody>

                            </table>
                            <div class="d-flex float-end">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($rowPromotionCount > 0)
        <div class="row">
            <div class="col-md-12">
                <h6>{{ __('Promotion Need to Approve') }}</h6>
                <div class="card">
                    <div class="card-body mt-2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>{{ __('#') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Promotion Starting Date') }}</th>
                                        <th>{{ __('Promotion Ending At') }}</th>
                                        <th>{{ __('Promotion Discount') }}</th>
                                        <th>{{ __('Promotion Price') }}</th>
                                        <th>{{ __('Created Date') }}</th>
                                        <th>{{ __('Created By') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($promotion as $promotiosItem)
                                        <tr>
                                            <td>#</td>
                                            <td>{{ $promotiosItem->title }}</td>
                                            <td>{{ $promotiosItem->slug }}</td>
                                            <td>{{ $promotiosItem->promotion_starting_date }}</td>
                                            <td>{{ $promotiosItem->promotion_ends_at }}</td>
                                            <td>{{ $promotiosItem->promotion_discount }}</td>
                                            <td>{{ $promotiosItem->promotion_price }}</td>
                                            <td>{{ $promotiosItem->created_at }}</td>
                                            <td>{{ $promotiosItem->created_by }}</td>
                                            <td>
                                                @if ($promotiosItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill p-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $promotiosItem->id . '/promotion_approval') }}"
                                                    onclick="return confirm('are you sure you want to approve this brand')">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <span>No Promotions</span>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
