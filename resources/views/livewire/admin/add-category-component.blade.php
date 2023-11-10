<div>
    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Add Category</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="add_category">
                <input class="form-control form-control mb-3" type="text" placeholder="Category Name" wire:model="category_name">
                <div class="col-md-4 mt-2">
                    <button type="submit" class="btn btn-success">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
