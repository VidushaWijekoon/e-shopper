@section('title', 'Categories')
@if (session('message'))
    <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Categories</h4>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary">Create New
                        Category</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: #e9ecef">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Approve Status</th>
                                <th>Active Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $categoryItem)
                                <tr>
                                    <td>{{ $categoryItem->id }}</td>
                                    <td>{{ $categoryItem->title }}</td>
                                    <td>{{ $categoryItem->slug }}</td>
                                    <td>{{ $categoryItem->created_at }}</td>
                                    <td>{{ $categoryItem->created_by }}</td>

                                    <td>
                                        @if ($categoryItem->approve_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                        @elseif ($categoryItem->approve_status == '0')
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($categoryItem->active_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                        @elseif ($categoryItem->active_status == '0')
                                            <span
                                                class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/category/' . $categoryItem->id . '/show') }}">
                                            <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Show {{ $categoryItem->title }}"></i>
                                        </a>
                                        <a href="{{ url('admin/category/' . $categoryItem->id . '/edit') }}">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Edit {{ $categoryItem->title }}"></i>
                                        </a>

                                        @if ($categoryItem->active_status == '1')
                                            <a href="{{ url('admin/category/' . $categoryItem->id . '/dectivate') }}">
                                                <i class="fa-solid fa-times-circle text-success mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="dectivate {{ $categoryItem->title }}"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('admin/category/' . $categoryItem->id . '/activate') }}">
                                                <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Activate {{ $categoryItem->title }}"></i>
                                            </a>
                                        @endif

                                        @if (Auth::user()->role == '1')
                                            <a href="{{ url('admin/category/' . $categoryItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this {{ $categoryItem->title }} category')">
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
