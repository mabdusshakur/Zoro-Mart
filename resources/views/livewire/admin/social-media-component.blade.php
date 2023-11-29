<div>
    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Add Social Media</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="addSocial">
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control form-control mb-3" type="text" placeholder="Name" wire:model="name">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control form-control mb-3" type="text"
                            placeholder="Icon, e.g. fa fa-facebook" wire:model="icon">
                    </div>
                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-success">Add Social Media</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Update Social Media</h6>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <input class="form-control form-control" type="text" placeholder="Name"
                                wire:model="name">
                        </td>
                        <td>
                            <input class="form-control form-control" type="text"
                                placeholder="Icon, e.g. fa fa-facebook" wire:model="icon">
                        </td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" wire:click="delete_social()" class="text-danger"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                        class="fa-solid fa-trash"></i></a>
                                <button type="button" wire:click="saveSocial()" class="btn btn-sm btn-success">Save</button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
