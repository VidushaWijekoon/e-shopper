@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <a href="{{ route('admin.promotions_index') }}">
                        <h2 class="">Promotions</h2>
                    </a>
                    <h3 class="card-text" style="font-weight: bold">10</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <a href="{{ route('admin.offer_index') }}">
                        <h2 class="">Offers</h2>
                    </a>
                    <h3 class="card-text" style="font-weight: bold">10</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <a href="{{ route('admin.coupens') }}">
                        <h2 class="">Coupens</h2>
                    </a>
                    <h3 class="card-text" style="font-weight: bold">10</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" onclick="promotions_table()">
                    <h2>Promotions</h2>
                    <i class="fa-solid fa-caret-down fa-2x"></i>
                </div>
                <div class="card-body" id="promotions">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background: #e9ecef">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Original Price</th>
                                    <th>Selling Price</th>
                                    <th>QTY</th>
                                    <th>Tranding</th>
                                    <th>Active</th>
                                    <th>Approve</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    const promotions_table = () => {
        var x = document.getElementById("promotions");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
