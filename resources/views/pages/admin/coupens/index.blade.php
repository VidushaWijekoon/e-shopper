@extends('layouts.admin.app')
@section('title', 'Coupens')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 class="d-flex align-items-center mt-auto">Coupens</h4>
                        <a href="{{ route('admin.promotion.create') }}" class="btn btn-sm btn-primary">Create New
                            Coupen</a>
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
                                    <th>Promotion Starting Date</th>
                                    <th>Promotion Ending At</th>
                                    <th>Promotion Discount</th>
                                    <th>Promotion Price</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Approve Status</th>
                                    <th>Active Status</th>
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
@endsection
