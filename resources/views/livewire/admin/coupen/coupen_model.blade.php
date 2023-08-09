<!-- Add Coupen Modal -->
<div wire:ignore.self class="modal fade" id="add_coupen" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">Add New Coupen</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3 mt-3 px-3 row">
                        <label for="title" class="col-md-2 col-form-label">Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="title" wire:model.defer="title">
                        </div>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3 px-3 row">
                        <label for="slug" class="col-md-2 col-form-label">Slug</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="slug" wire:model.defer="slug">
                        </div>
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3 px-3 row">
                        <label for="description" class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-10">
                            <textarea name="" cols="30" rows="3" class="form-control" wire:model.defer="description"></textarea>
                        </div>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3 px-3 row">
                        <label for="coupen_code" class="col-md-2 col-form-label">Coupen Code</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="coupen_code" wire:model.defer="coupen_code">
                        </div>
                        @error('coupen_code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save Coupen</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
