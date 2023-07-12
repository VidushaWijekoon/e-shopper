@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h5>Categories</h5>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary">Create New
                        Category</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>#</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection