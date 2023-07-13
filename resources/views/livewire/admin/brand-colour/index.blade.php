<div class="row">
    @if (session('message'))
    <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message')}}</div>
    @endif

    <!-- Brands -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Brands</h4>
                    <a href="{{ route('admin.brand.create') }}" class="btn btn-sm btn-primary">Create New
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brand as $brandItem)
                            <tr>
                                <td>{{ $brandItem->id }}</td>
                                <td>{{ $brandItem->title }}</td>
                                <td>{{ $brandItem->created_at }}</td>
                                <td>{{ $brandItem->created_by }}</td>
                                <td>
                                    @if ($brandItem->status == '0')
                                    <span class="badge text-bg-success rounded-pill p-1 px-2 text-white">Approved &
                                        Active</span>
                                    @else
                                    <span class="badge text-bg-warning rounded-pill p-1 px-2 text-white">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/category/' . $brandItem->id . '/show' ) }}">
                                        <i class="fa-solid fa-eye text-info mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Show {{ $brandItem->title }}"></i>
                                    </a>
                                    <a href="{{ url('admin/category/' . $brandItem->id . '/edit' ) }}">
                                        <i class="fa-solid fa-pen-to-square text-primary mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Edit {{ $brandItem->title }}"></i>
                                    </a>
                                    <a href="{{ url('admin/category/' . $brandItem->id . '/destroy') }}"
                                        onclick="return confirm('Are you sure you want to delete this {{ $brandItem->title }} category')">
                                        <i class="fa-solid fa-trash text-danger mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Delete">
                                        </i>
                                    </a>
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

    <!-- Colours -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Colours</h4>
                    <a href="{{ route('admin.colour.create') }}" class="btn btn-sm btn-primary">Create New
                        Colour</a>
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($colour as $colourItem)
                            <tr>
                                <td>{{ $colourItem->id }}</td>
                                <td>{{ $colourItem->title }}</td>
                                <td>{{ $colourItem->created_at }}</td>
                                <td>{{ $colourItem->created_by }}</td>
                                <td>
                                    @if ($colourItem->status == '0')
                                    <span class="badge text-bg-success rounded-pill p-1 px-2 text-white">Approved &
                                        Active</span>
                                    @else
                                    <span class="badge text-bg-warning rounded-pill p-1 px-2 text-white">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/category/' . $colourItem->id . '/show' ) }}">
                                        <i class="fa-solid fa-eye text-info mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Show {{ $colourItem->title }}"></i>
                                    </a>
                                    <a href="{{ url('admin/category/' . $colourItem->id . '/edit' ) }}">
                                        <i class="fa-solid fa-pen-to-square text-primary mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Edit {{ $colourItem->title }}"></i>
                                    </a>
                                    <a href="{{ url('admin/category/' . $colourItem->id . '/destroy') }}"
                                        onclick="return confirm('Are you sure you want to delete this {{ $colourItem->title }} category')">
                                        <i class="fa-solid fa-trash text-danger mx-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Delete">
                                        </i>
                                    </a>
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