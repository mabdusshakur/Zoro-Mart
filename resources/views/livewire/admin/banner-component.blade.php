<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Banners')
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
                        <option value="">Select Status</option>
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

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">All Banners</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="Product Nameor Or Id" wire:model="search">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                        <tr>
                            <td>{{$banner->banner_title}}</td>
                            <td><img src="{{Storage::url($banner->banner_image)}}" class="product-img-2" alt="banner img"></td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" wire:click="delete_banner({{$banner->id}})" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="fa-solid fa-trash"></i></a>
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
