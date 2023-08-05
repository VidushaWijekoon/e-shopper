@extends('layouts.admin.app')
@section('title', 'Users')
@section('content')
    <h4>All Users</h4>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body mt-2">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background: #e9ecef">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $usersItem)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $usersItem->name }}</td>
                                        <td>{{ $usersItem->email }}</td>
                                        <td>{{ $usersItem->username }}</td>
                                        <td>
                                            @if ($usersItem->role == '0')
                                                <span class="badge badge-secondary rounded-pill pb-1 px-2">Client</span>
                                            @elseif ($usersItem->role == '1')
                                                <span class="badge badge-secondary rounded-pill pb-1 px-2">Admin</span>
                                            @elseif ($usersItem->role == '2')
                                                <span class="badge badge-secondary rounded-pill pb-1 px-2">Super Admin</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($usersItem->status == '0')
                                                <span class="badge badge-success rounded-pill pb-1 px-2">Active</span>
                                            @else
                                                <span class="badge badge-danger rounded-pill pb-1 px-2">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/user/' . $usersItem->id . '/show') }}">
                                                <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Show {{ $usersItem->title }}"></i>
                                            </a>
                                            <a href="{{ url('admin/user/' . $usersItem->id . '/edit') }}">
                                                <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                    data-placement="bottom" title="Edit {{ $usersItem->title }}"></i>
                                            </a>

                                            @if ($usersItem->active_status == '1')
                                                <a href="{{ url('admin/user/' . $usersItem->id . '/dectivate') }}">
                                                    <i class="fa-solid fa-times-circle text-success mx-2"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="dectivate {{ $usersItem->title }}"></i>
                                                </a>
                                            @else
                                                <a href="{{ url('admin/user/' . $usersItem->id . '/activate') }}">
                                                    <i class="fa-solid fa-check-circle text-secondary mx-2"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Activate {{ $usersItem->title }}"></i>
                                                </a>
                                            @endif

                                            @if (Auth::user()->role == '1')
                                                <a href="{{ url('admin/user/' . $usersItem->id . '/destroy') }}"
                                                    onclick="return confirm('Are you sure you want to delete this {{ $usersItem->title }} product')">
                                                    <i class="fa-solid fa-trash text-danger mx-2" data-toggle="tooltip"
                                                        data-placement="bottom" title="Delete">
                                                    </i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
