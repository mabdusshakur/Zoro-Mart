<div>
    @include('partials.admin._alerts')

    @if (!$isOldAvailable)
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add Utilit</h6>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addUtility">
                    <div class="row">
                        <div class="col-md-4">
                            <input class="form-control form-control mb-3" type="text" placeholder="Hotline"
                                wire:model="hotline">
                            <input class="form-control form-control mb-3" type="text" placeholder="Email"
                                wire:model="email">
                            <input class="form-control form-control mb-3" type="text" placeholder="Website Name"
                                wire:model="web_name">
                            <label for="logo_input" class="form-label">Select Logo</label>
                            <input class="form-control mb-3" type="file" id="logo_input" wire:model="logo">

                            <label for="favicon_input" class="form-label">Select Favicon</label>
                            <input class="form-control mb-3" type="file" id="favicon_input" wire:model="favicon">
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" cols="30" rows="10" placeholder="About Section" wire:model="about"></textarea>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-success">Add Setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Update Utility</h6>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="saveUtility">
                    <div class="row">
                        <div class="col-md-4">
                            <input class="form-control form-control mb-3" type="text" placeholder="Hotline"
                                wire:model="hotline">
                            <input class="form-control form-control mb-3" type="text" placeholder="Email"
                                wire:model="email">
                            <input class="form-control form-control mb-3" type="text" placeholder="Website Name"
                                wire:model="web_name">

                            <label for="logo_input" class="form-label">Select Logo</label>
                            <input class="form-control mb-3" type="file" id="logo_input" wire:model="logo">
                            <div class="col-md-6 mt-2 mb-2">
                                <img src="{{ Storage::url($old_logo) }}" alt="Logo"
                                    height="50px" width="50px" />
                            </div>

                            <label for="favicon_input" class="form-label">Select Favicon</label>
                            <input class="form-control mb-3" type="file" id="favicon_input" wire:model="favicon">
                            <div class="col-md-6 mt-2 mb-2">
                                <img src="{{ Storage::url($old_favicon) }}" alt="Logo"
                                    height="32px" width="32px" />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" cols="30" rows="10" placeholder="About Section" wire:model="about"></textarea>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-success">Save Setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
