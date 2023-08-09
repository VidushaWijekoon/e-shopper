@section('title', 'Colors-Brands')
@if (session('message'))
    <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">{{ session('message') }}
    </div>
@endif

@include('livewire.admin.coupen.coupen_model')

<div class="row justify-content-center">
    <!-- Colors -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 class="d-flex align-items-center mt-auto">Coupens</h4>
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#add_coupen">Create New
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
                    <div class="d-flex float-end">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
