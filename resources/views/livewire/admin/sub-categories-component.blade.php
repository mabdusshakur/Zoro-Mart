<div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">All Sub Categories</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="fa-solid fa-magnifying-glass"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="Sub Category Name" wire:model="search">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Sub Category</th>
                            <th>Category</th>
                            <th>Total Product's</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sub_categories as $sub_category)
                            <tr>
                                <td>{{$sub_category->name}}</td>
                                <td>{{$sub_category->category_count}}</td>
                                <td>{{$sub_category->product_count}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" wire:click="view_sub_category({{$sub_category->id}})" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="fa-solid fa-eye"></i></a>

                                        <a href="javascript:;" wire:click="edit_sub_category({{$sub_category->id}})" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="fa-solid fa-pencil"></i></a>

                                        <a href="javascript:;" wire:click="delete_sub_category({{$sub_category->id}})" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
