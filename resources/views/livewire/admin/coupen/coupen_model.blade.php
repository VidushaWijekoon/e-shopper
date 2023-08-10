<!-- Add Coupen Modal -->
<div wire:ignore.self class="modal fade" id="add_coupen" tabindex="-1" aria-labelledby="add_coupen" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="add_coupen">Add New Coupen</h3>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form wire:submit.prevent="storeCoupen">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="">Coupen Title</label>
                        <input type="text" wire:model.defer="title" class="form-control form-control-sm">
                        @error('title')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Coupen Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control form-control-sm">
                        @error('slug')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Coupen Number</label>
                        <input type="text" wire:model.defer="coupen_number" class="form-control form-control-sm"
                            min="0">
                        @error('coupen_number')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Coupen Percentage</label>
                        <input type="number" wire:model.defer="coupen_percentage" class="form-control form-control-sm"
                            min="0">
                        @error('coupen_percentage')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea wire:model.defer="description" class="form-control form-control-sm" rows="3"></textarea>
                        @error('description')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Show Coupen Modal -->
<div wire:ignore.self class="modal fade" id="show_coupen" tabindex="-1" aria-labelledby="show_coupen"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="show_coupen">Coupen</h3>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label for="">Coupen Title</label>
                    <input type="text" class="form-control form-control-sm" readonly disabled>
                </div>

                <div class="mb-3">
                    <label for="">Coupen Slug</label>
                    <input type="text" class="form-control form-control-sm" readonly disabled>
                </div>

                <div class="mb-3">
                    <label for="">Coupen Number</label>
                    <input type="number" class="form-control form-control-sm" min="0" readonly disabled>
                </div>

                <div class="mb-3">
                    <label for="">Coupen Percentage</label>
                    <input type="number" class="form-control form-control-sm" min="0" readonly disabled>
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control form-control-sm" rows="3" readonly disabled></textarea>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Edit Coupen Modal -->
<div wire:ignore.self class="modal fade" id="edit_coupen" tabindex="-1" aria-labelledby="edit_coupen"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="edit_coupen">Update Coupen</h3>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form wire:submit.prevent="updateCoupen">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="">Coupen Title</label>
                        <input type="text" wire:model.defer="title" class="form-control form-control-sm">
                        @error('title')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Coupen Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control form-control-sm">
                        @error('slug')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Coupen Number</label>
                        <input type="text" wire:model.defer="coupen_number" class="form-control form-control-sm"
                            min="0">
                        @error('coupen_number')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Coupen Percentage</label>
                        <input type="number" wire:model.defer="coupen_percentage"
                            class="form-control form-control-sm" min="0">
                        @error('coupen_percentage')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea wire:model.defer="description" class="form-control form-control-sm" rows="3"></textarea>
                        @error('description')
                            <small class="text-danger text-capitalize">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Update changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Delete Coupen Modal -->
<div wire:ignore.self id="delete_coupen" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form wire:submit.prevent="destroyCoupen">
                <div class="modal-body text-center">
                    <img src="{{ asset('img/sent.png') }}" alt="delete" width="50" height="46"
                        class="mb-3">
                    <h3 class="m-3">Are you sure want to delete this Coupen?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
