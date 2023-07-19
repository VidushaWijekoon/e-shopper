@extends('layouts.admin.app')
@section('title', 'Approve')
@section('content')
@if (session('message'))
<div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message')}}</div>
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
                            @forelse ($categories as $item)
                            <tr>
                                <td>
                                    <?= $i++ ?>
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>Category</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->created_by }}</td>
                                <td>
                                    @if ($item->approve_status == '0')
                                    <span class="badge text-bg-warning rounded-pill p-1 px-2 text-white">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/approval/' . $item->id . '/category_edit') }}"
                                        onclick="return confirm('are you sure you want to approve this category')">
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

@if ($rowBrandCount > 0)
<div class="row">

    <!-- Brands -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Brands</h4>
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


                        </tbody>
                    </table>

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
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@endif




@endsection