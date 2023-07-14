<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Products</h4>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">Create New
                        Product</a>
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
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                    </table>
                    <div class="d-flex float-end">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>