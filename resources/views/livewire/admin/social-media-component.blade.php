<div>
    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Social Media</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="saveSocial">
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control form-control mb-3" type="text" placeholder="Name"
                        wire:model="name">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control form-control mb-3" type="text" placeholder="Icon, e.g. fa fa-facebook"
                        wire:model="icon">
                    </div>
                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-success">Save Setting</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
