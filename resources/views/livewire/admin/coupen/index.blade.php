@section('title', 'Coupens')

<div class="row justify-content-center">
    @include('livewire.admin.coupen.coupen_model')
    <!-- Coupen -->
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Coupens</h4>
                    <a href="#" class="btn btn-sm btn-primary p-1" data-bs-toggle="modal"
                        data-bs-target="#add_coupen">Create New
                        Coupen</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: #e9ecef">
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Coupen Number') }}</th>
                                <th>{{ __('Coupen Percentage') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Created Date') }}</th>
                                <th>{{ __('Created By') }}</th>
                                <th>{{ __('Approve Status') }}</th>
                                <th>{{ __('Active Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($coupens as $coupensItem)
                                <tr>
                                    <td>#</td>
                                    <td>{{ $coupensItem->title }}</td>
                                    <td>{{ $coupensItem->slug }}</td>
                                    <td>{{ $coupensItem->coupen_number }}</td>
                                    <td>{{ $coupensItem->coupen_percentage }}</td>
                                    <td>{{ $coupensItem->description }}</td>
                                    <td>{{ $coupensItem->created_at }}</td>
                                    <td>{{ $coupensItem->created_by }}</td>
                                    <td>
                                        @if ($coupensItem->approve_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                        @elseif ($coupensItem->approve_status == '0')
                                            <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($coupensItem->active_status == '1')
                                            <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                        @elseif ($coupensItem->active_status == '0')
                                            <span
                                                class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" wire:click="showCoupen({{ $coupensItem->id }})">
                                            <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#show_coupen"
                                                data-placement="bottom" title="Show {{ $coupensItem->title }}"></i>
                                        </a>
                                        <a href="#" wire:click="editCoupen({{ $coupensItem->id }})">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#edit_coupen"
                                                data-placement="bottom" title="Edit {{ $coupensItem->title }}"></i>
                                        </a>

                                        @if ($coupensItem->active_status == '1')
                                            <a href="{{ url('admin/coupen/' . $coupensItem->id . '/dectivate') }}">
                                                <i class="fa-solid fa-times-circle text-success mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="dectivate {{ $coupensItem->title }}"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('admin/coupen/' . $coupensItem->id . '/activate') }}">
                                                <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Activate {{ $coupensItem->title }}"></i>
                                            </a>
                                        @endif

                                        @if (Auth::user()->role == '1')
                                            <a href="#" wire:click="deleteCoupen({{ $coupensItem->id }})"
                                                data-bs-toggle="modal" data-bs-target="#delete_coupen">
                                                <i class="fa-solid fa-trash text-danger mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete">
                                                </i>
                                            </a>
                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <span class="text-danger">No Coupen has been found</span>
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

<script>
    window.addEventListener('close-modal', event => {
        $('#add_coupen').modal('hide');
        $('#edit_coupen').modal('hide');
        $('#delete_coupen').modal('hide');
    });
</script>
