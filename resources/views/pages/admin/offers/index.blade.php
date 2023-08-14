@extends('layouts.admin.app')
@section('title', 'Offers')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 class="d-flex align-items-center mt-auto">Offers</h4>
                        <a href="{{ route('admin.offer.create') }}" class="btn btn-sm btn-primary p-1">Create New
                            Offer</a>
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
                                    <th>{{ __('Offer Starting Date') }}</th>
                                    <th>{{ __('Offer Ending At') }}</th>
                                    <th>{{ __('Offer Discount') }}</th>
                                    <th>{{ __('Offer Price') }}</th>
                                    <th>{{ __('Created Date') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th>{{ __('Approve Status') }}</th>
                                    <th>{{ __('Active Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($offers as $offerItems)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $offerItems->title }}</td>
                                        <td>{{ $offerItems->slug }}</td>
                                        <td>{{ $offerItems->offer_starting_date }}</td>
                                        <td>{{ $offerItems->offer_ends_at }}</td>
                                        <td>{{ $offerItems->offer_discount }}</td>
                                        <td>{{ $offerItems->offer_price }}</td>
                                        <td>{{ $offerItems->created_at }}</td>
                                        <td>{{ $offerItems->created_by }}</td>
                                        <td>
                                            @if ($offerItems->approve_status == '1')
                                                <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                            @elseif ($offerItems->approve_status == '0')
                                                <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($offerItems->active_status == '1')
                                                <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                            @elseif ($offerItems->active_status == '0')
                                                <span
                                                    class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/offer/' . $offerItems->id . '/show') }}">
                                                <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Show {{ $offerItems->title }}"></i>
                                            </a>
                                            <a href="{{ url('admin/offer/' . $offerItems->id . '/edit') }}">
                                                <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Edit {{ $offerItems->title }}"></i>
                                            </a>

                                            @if ($offerItems->active_status == '1')
                                                <a href="{{ url('admin/offer/' . $offerItems->id . '/dectivate') }}">
                                                    <i class="fa-solid fa-times-circle text-success mx-2"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="dectivate {{ $offerItems->title }}"></i>
                                                </a>
                                            @else
                                                <a href="{{ url('admin/offer/' . $offerItems->id . '/activate') }}">
                                                    <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Activate {{ $offerItems->title }}"></i>
                                                </a>
                                            @endif

                                            @if (Auth::user()->role == '1')
                                                <a href="{{ url('admin/offer/' . $offerItems->id . '/destroy') }}"
                                                    onclick="return confirm('Are you sure you want to delete this {{ $offerItems->title }} offer')">
                                                    <i class="fa-solid fa-trash text-danger mx-2" data-toggle="tooltip"
                                                        data-placement="bottom" title="Delete">
                                                    </i>
                                                </a>
                                            @endif

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
@endsection
