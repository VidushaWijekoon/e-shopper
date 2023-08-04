@section('title', 'Products')
@if (session('message'))
    <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
@endif
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Products</h4>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">Create New
                        Product</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: #e9ecef">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Original Price</th>
                                <th>Selling Price</th>
                                <th>QTY</th>
                                <th>Tranding</th>
                                <th>Active</th>
                                <th>Approve</th>
                                <th>Action</th>
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
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Not Tranding</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($productItem->approve_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                        @elseif ($productItem->approve_status == '0')
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($productItem->active_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                        @elseif ($productItem->active_status == '0')
                                            <span
                                                class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/product/' . $productItem->id . '/show') }}">
                                            <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Show {{ $productItem->title }}"></i>
                                        </a>
                                        <a href="{{ url('admin/product/' . $productItem->id . '/edit') }}">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Edit {{ $productItem->title }}"></i>
                                        </a>

                                        @if ($productItem->active_status == '1')
                                            <a href="{{ url('admin/product/' . $productItem->id . '/dectivate') }}">
                                                <i class="fa-solid fa-times-circle text-success mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="dectivate {{ $productItem->title }}"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('admin/product/' . $productItem->id . '/activate') }}">
                                                <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Activate {{ $productItem->title }}"></i>
                                            </a>
                                        @endif

                                        @if (Auth::user()->role == '1')
                                            <a href="{{ url('admin/product/' . $productItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this {{ $productItem->title }} product')">
                                                <i class="fa-solid fa-trash text-danger mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete">
                                                </i>
                                            </a>
                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <span>No Data Found!</span>
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
