<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Add Product')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Add Banner</h6>
        </div>
        <form wire:submit.prevent="add_banner">
            <div class="card-body">
                <input class="form-control form-control mb-3" type="text" placeholder="Banner Title"
                    wire:model="banner_title">

                <div class="row">
                    <div class="col-md-6">
                        <label for="banner_input" class="form-label">Select Banner</label>
                        <input class="form-control mb-3" type="file" id="banner_input" wire:model="banner">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <label for="banner_status" class="form-label">Select Banner</label>
                    <select class="form-select" id="banner_status" wire:model="banner_status">
                        <option value="1">Enabled</option>
                        <option value="0">Disabled</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Add Banner</button>
                </div>
            </div>
        </form>
    </div>
</div>
