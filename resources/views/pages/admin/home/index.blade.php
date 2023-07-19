@extends('layouts.admin.app')
@section('title', 'JBMM Dashboard')
@section('content')

@section('title', 'Categories')
@if (session('message'))
<div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message')}}</div>
@endif

<div class="container-fluid p-0">

    <div class="row">

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title d-flex align-items-center">Categories</h5>
                        <h2 class="subtitle">25</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title d-flex align-items-center">Brands</h5>
                        <h2 class="subtitle">25</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title d-flex align-items-center">Colours</h5>
                        <h2 class="subtitle">25</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title d-flex align-items-center">Products</h5>
                        <h2 class="subtitle">25</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>

@endsection