@if (session('message'))
    <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
@endif
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Sliders</h4>
                    <a href="{{ route('admin.slider.create') }}" class="btn btn-sm btn-primary">Create New
                        Slider</a>
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
                                <th>Image</th>
                                <th>Created By</th>
                                <th>Approve Status</th>
                                <th>Active Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sliders as $sliderItem)
                                <tr>
                                    <td>{{ $sliderItem->id }}</td>
                                    <td>{{ $sliderItem->title }}</td>
                                    <td>{{ $sliderItem->slug }}</td>
                                    <td>
                                        <img src="{{ asset($sliderItem->image) }}" alt="{{ $sliderItem->title }}"
                                            width="150" height="80">
                                    </td>
                                    <td>{{ $sliderItem->created_by }}</td>
                                    <td>
                                        @if ($sliderItem->approve_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                        @elseif ($sliderItem->approve_status == '0')
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($sliderItem->active_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                        @elseif ($sliderItem->active_status == '0')
                                            <span
                                                class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/slider/' . $sliderItem->id . '/show') }}">
                                            <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Show {{ $sliderItem->title }}"></i>
                                        </a>
                                        <a href="{{ url('admin/slider/' . $sliderItem->id . '/edit') }}">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Edit {{ $sliderItem->title }}"></i>
                                        </a>

                                        @if ($sliderItem->active_status == '1')
                                            <a href="{{ url('admin/slider/' . $sliderItem->id . '/dectivate') }}">
                                                <i class="fa-solid fa-times-circle text-success mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="dectivate {{ $sliderItem->title }}"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('admin/slider/' . $sliderItem->id . '/activate') }}">
                                                <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Activate {{ $sliderItem->title }}"></i>
                                            </a>
                                        @endif

                                        @if (Auth::user()->role == '1')
                                            <a href="{{ url('admin/slider/' . $sliderItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this {{ $sliderItem->title }} slider')">
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
