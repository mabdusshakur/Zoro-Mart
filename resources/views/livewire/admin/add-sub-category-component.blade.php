<div>
    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Add Sub-Category</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="add_sub_category">
                <input class="form-control form-control mb-3" type="text" placeholder="Sub-Category Name"
                    wire:model="sub_category_name">
                <div class="row">
                    <div class="col-md-6">
                        <label for="subcategory_input" class="form-label">Select Category</label>
                        <select class="form-select mb-3" wire:model="category_id">
                            <option selected="">Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-success">Add Sub-Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
