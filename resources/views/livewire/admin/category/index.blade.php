@if (session('message'))
<div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message')}}</div>
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
                                <th>Status</th>
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
                                <td>Admin</td>
                                <td>
                                    @if ($categoryItem->status == '0')
                                    <span class="badge text-bg-success rounded-pill p-1 px-2 text-white">Approved &
                                        Active</span>
                                    @else
                                    <span class="badge text-bg-warning rounded-pill p-1 px-2 text-white">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/category/' . $categoryItem->id . '/show' ) }}">
                                        <i class="fa-solid fa-eye text-info mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Show {{ $categoryItem->title }}"></i>
                                    </a>
                                    <a href="{{ url('admin/category/' . $categoryItem->id . '/edit' ) }}">
                                        <i class="fa-solid fa-pen-to-square text-primary mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Edit {{ $categoryItem->title }}"></i>
                                    </a>
                                    <a href="{{ url('admin/category/' . $categoryItem->id . '/destroy') }}"
                                        onclick="return confirm('Are you sure you want to delete this {{ $categoryItem->title }} category')">
                                        <i class="fa-solid fa-trash text-danger mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Delete">
                                        </i>
                                    </a>
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