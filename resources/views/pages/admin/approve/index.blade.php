@extends('layouts.admin.app')
@section('title', 'Approve')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
    @endif

    <div class="title">
        <h5 class="mx-2 mb-3">Waiting for Appproval</h5>
    </div>

    @if ($rowCategoryCount > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body mt-2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #e9ecef">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Category</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($categories as $categoryItem)
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>{{ $categoryItem->title }}</td>
                                            <td>{{ $categoryItem->slug }}</td>
                                            <td>Category</td>
                                            <td>{{ $categoryItem->created_at }}</td>
                                            <td>{{ $categoryItem->created_by }}</td>
                                            <td>
                                                @if ($categoryItem->approve_status == '0')
                                                    <span
                                                        class="badge badge-danger text-bg-warning rounded-pill pb-1 px-2 text-white">Waiting
                                                        for Approve </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/approval/' . $categoryItem->id . '/category_edit') }}"
                                                    onclick="return confirm('are you sure you want to approve this category')"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Approve {{ $categoryItem->title }}">
                                                    <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($rowColorCount > 0)
        <!-- Colors -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 class="d-flex align-items-center mt-auto">Colors</h4>
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
                                    <th>Category</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @forelse ($color as $colorItem)
                                    <tr>
                                        <td>
                                            <?= $i++ ?>
                                        </td>
                                        <td>{{ $colorItem->title }}</td>
                                        <td>{{ $colorItem->slug }}</td>
                                        <td>Brand</td>
                                        <td>{{ $colorItem->created_at }}</td>
                                        <td>{{ $colorItem->created_by }}</td>
                                        <td>
                                            @if ($colorItem->approve_status == '0')
                                                <span
                                                    class="badge text-bg-warning rounded-pill p-1 px-2 text-white">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/approval/' . $colorItem->id . '/colour_edit') }}"
                                                onclick="return confirm('are you sure you want to approve this brand')">
                                                <i class="fa-solid fa-circle-check text-success mx-auto"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <span>No Brand to Approve</span>
                                @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endif




@endsection
