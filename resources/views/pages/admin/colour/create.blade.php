@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header" style="background: #222e3c">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 style="color: #e9ecef">Create New Colour</h4>
                </span>
            </div>

            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                    @foreach ($errors->all() as $error)
                    <div class="">{{ $error }}</div>
                    @endforeach
                </div>
                @endif

                <form action="{{ route('admin.colour.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Title" class="form-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Title" class="form-control" placeholder="Colour Title" name="title">
                            @error('title') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Slug" class="form-label">Slug
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="Slug" class="form-control" placeholder="Colour Slug" name="slug">
                            @error('slug') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col md-12">
                            <label for="Slug" class="form-label">Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" id="Slug" class="form-control" rows="3"
                                placeholder="Colour Description" name="description"></textarea>
                            @error('description') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="Image" class="form-control" name="image"
                                accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                            @error('image') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="Image" class="form-label">Status
                                <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Visible</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Hide</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class=" mb-3 mt-4">

                    <button type="submit" class="btn btn-sm btn-info float-end">Create New Colour</button>

                </form>

            </div>

        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header" style="background: #222e3c">
                <span class="card-title mb-0 d-flex justify-content-between">
                    <h4 style="color: #e9ecef">Existing Colour</h4>
                </span>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    @forelse ($colour as $colourItem)
                    <div class="d-flex justify-content-between">

                        <span class="d-flex align-items-center">{{ $colourItem->title }}</span>
                        <span>
                            <img src="{{ asset($colourItem->image) }}" alt="{{$colourItem->title}}" height="50">
                        </span>

                    </div>
                    @empty
                    <span>No Category Has Been Created</span>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</div>
@endsection