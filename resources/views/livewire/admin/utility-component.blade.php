<div>
    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Edit Sub-Category</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="saveUtility">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control form-control mb-3" type="text" placeholder="Hotline"
                        wire:model="hotline">
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

</div>
