@extends('layouts.admin.app')
@section('title', 'View Category')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background: #222e3c">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 style="color: #e9ecef">Show Category ID : {{ $categories->id }}</h4>
                </span>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" id="Title" class="form-control" value="{{ $categories->title }}"
                            name="title">
                    </div>
                    <div class="col-md-6">
                        <label for="Slug" class="form-label">Slug</label>
                        <input type="text" id="Slug" class="form-control" value="{{ $categories->slug }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col md-12">
                        <label for="Slug" class="form-label">Description</label>
                        <textarea type="text" id="Slug" class="form-control"
                            rows="3">{{ $categories->description }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="Image" class="form-label">Image</label>
                        <img src="{{ asset($categories->image) }}" alt="image{{ $categories->title }}"
                            style="width: 150px; display: block;">
                    </div>
                </div>

                <hr class=" mb-3 mt-4">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Title" class="form-label">Meta Title</label>
                        <input type="text" id="Title" class="form-control" value="{{ $categories->title }}">
                    </div>
                    <div class="col-md-6">
                        <label for="Keyword" class="form-label">Meta Keyword</label>
                        <input type="text" id="Slug" class="form-control" value="{{ $categories->meta_keyword }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col md-12">
                        <label for="Slug" class="form-label">Meta Description</label>
                        <textarea type="text" id="Slug" class="form-control"
                            rows="3">{{ $categories->meta_description }}</textarea>
                    </div>
                </div>

                <hr class="mb-3 mt-4">

            </div>

        </div>
    </div>
</div>
@endsection