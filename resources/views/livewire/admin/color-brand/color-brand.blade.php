@section('title', 'Colors-Brands')
@if (session('message'))
    <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">{{ session('message') }}
    </div>
@endif

<div class="row">
    <!-- Colors -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Colors</h4>
                    <a href="{{ route('admin.color.create') }}" class="btn btn-sm btn-primary p-1">Create New
                        Color</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: #e9ecef">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Approve Status</th>
                                <th>Active Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($color as $colorItem)
                                <tr>
                                    <td>{{ $colorItem->id }}</td>
                                    <td>{{ ucfirst($colorItem->title) }}</td>
                                    <td>{{ $colorItem->created_at }}</td>
                                    <td>{{ $colorItem->created_by }}</td>
                                    <td>
                                        @if ($colorItem->approve_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                        @elseif ($colorItem->approve_status == '0')
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($colorItem->active_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                        @elseif ($colorItem->active_status == '0')
                                            <span
                                                class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/color/' . $colorItem->id . '/show') }}">
                                            <i class="fa-solid fa-eye text-info mx-1" data-toggle="tooltip"
                                                data-placement="bottom" title="Show {{ $colorItem->title }}"></i>
                                        </a>
                                        <a href="{{ url('admin/color/' . $colorItem->id . '/edit') }}">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-1" data-toggle="tooltip"
                                                data-placement="bottom" title="Edit {{ $colorItem->title }}"></i>
                                        </a>


                                        @if ($colorItem->active_status == '1')
                                            <a href="{{ url('admin/color/' . $colorItem->id . '/dectivate') }}">
                                                <i class="fa-solid fa-times-circle text-success mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="dectivate {{ $colorItem->title }}"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('admin/color/' . $colorItem->id . '/activate') }}">
                                                <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Activate {{ $colorItem->title }}"></i>
                                            </a>
                                        @endif


                                        @if (Auth::user()->role == '1')
                                            <a href="{{ url('admin/color/' . $colorItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this {{ $colorItem->title }} category')">
                                                <i class="fa-solid fa-trash text-danger mx-1" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete">
                                                </i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <span>No Color Found</span>
                            @endforelse

                        </tbody>
                    </table>
                    <div class="d-flex float-end">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Brands</h4>
                    <a href="{{ route('admin.brand.create') }}" class="btn btn-sm btn-primary p-1">Create New
                        Brand</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: #e9ecef">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Approve Status</th>
                                <th>Active Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($allBrands as $brandItem)
                                <tr>
                                    <td>{{ $brandItem->id }}</td>
                                    <td>{{ ucfirst($brandItem->title) }}</td>
                                    <td>{{ $brandItem->created_at }}</td>
                                    <td>{{ $brandItem->created_by }}</td>
                                    <td>
                                        @if ($brandItem->approve_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                        @elseif ($brandItem->approve_status == '0')
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($brandItem->active_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                        @elseif ($brandItem->active_status == '0')
                                            <span
                                                class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/brand/' . $brandItem->id . '/show') }}">
                                            <i class="fa-solid fa-eye text-info mx-1" data-toggle="tooltip"
                                                data-placement="bottom" title="Show {{ $brandItem->title }}"></i>
                                        </a>
                                        <a href="{{ url('admin/brand/' . $brandItem->id . '/edit') }}">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-1" data-toggle="tooltip"
                                                data-placement="bottom" title="Edit {{ $brandItem->title }}"></i>
                                        </a>

                                        @if ($brandItem->active_status == '1')
                                            <a href="{{ url('admin/brand/' . $brandItem->id . '/dectivate') }}">
                                                <i class="fa-solid fa-times-circle text-success mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="dectivate {{ $brandItem->title }}"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('admin/brand/' . $brandItem->id . '/activate') }}">
                                                <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Activate {{ $brandItem->title }}"></i>
                                            </a>
                                        @endif

                                        @if (Auth::user()->role == '1')
                                            <a href="{{ url('admin/brand/' . $brandItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this {{ $brandItem->title }} category')">
                                                <i class="fa-solid fa-trash text-danger mx-1" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete">
                                                </i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <span>No Brand Found</span>
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
