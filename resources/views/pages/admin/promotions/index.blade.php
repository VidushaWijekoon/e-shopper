@extends('layouts.admin.app')
@section('title', 'Promotions')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 class="d-flex align-items-center mt-auto">{{ __('Promotions') }}</h4>
                        <a href="{{ route('admin.promotion.create') }}"
                            class="btn btn-sm btn-primary p-1">{{ __('Create New
                                                                                                                                                                                                    Promotion') }}</a>
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
                                    <th>{{ __('Promotion Starting Date') }}</th>
                                    <th>{{ __('Promotion Ending At') }}</th>
                                    <th>{{ __('Promotion Discount') }}</th>
                                    <th>{{ __('Promotion Price') }}</th>
                                    <th>{{ __('Created Date') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th>{{ __('Approve Status') }}</th>
                                    <th>{{ __('Active Status') }}</th>
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
                                            @if ($promotiosItem->approve_status == '1')
                                                <span class="badge badge-success rounded-pill pb-1 px-2">Approved</span>
                                            @elseif ($promotiosItem->approve_status == '0')
                                                <span class="badge badge-danger rounded-pill pb-1 px-2">Pending</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($promotiosItem->active_status == '1')
                                                <span class="badge badge-success rounded-pill pb-1 px-2">Activated</span>
                                            @elseif ($promotiosItem->active_status == '0')
                                                <span
                                                    class="badge badge-secondary rounded-pill pb-1 px-2">Deactivated</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/promotion/' . $promotiosItem->id . '/show') }}">
                                                <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Show {{ $promotiosItem->title }}"></i>
                                            </a>
                                            <a href="{{ url('admin/promotion/' . $promotiosItem->id . '/edit') }}">
                                                <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Edit {{ $promotiosItem->title }}"></i>
                                            </a>

                                            @if ($promotiosItem->active_status == '1')
                                                <a
                                                    href="{{ url('admin/promotion/' . $promotiosItem->id . '/dectivate') }}">
                                                    <i class="fa-solid fa-times-circle text-success mx-2"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="dectivate {{ $promotiosItem->title }}"></i>
                                                </a>
                                            @else
                                                <a href="{{ url('admin/promotion/' . $promotiosItem->id . '/activate') }}">
                                                    <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Activate {{ $promotiosItem->title }}"></i>
                                                </a>
                                            @endif

                                            @if (Auth::user()->role == '1')
                                                <a href="{{ url('admin/promotion/' . $promotiosItem->id . '/destroy') }}"
                                                    onclick="return confirm('Are you sure you want to delete this {{ $promotiosItem->title }} promotion')">
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
