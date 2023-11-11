<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Products')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">All Products</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="Product Nameor Or Id" wire:model="search">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Photo</th>
                            <th>Product ID</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            @php
                                $images = App\Models\product_image::where('product_uid', $product->product_uid)->get()->take(1);
                            @endphp      
                            @foreach ($images as $image)
                                <td><img src="{{Storage::url($image->image)}}" class="product-img-2" alt="product img"></td>
                            @endforeach
                            <td>{{$product->product_uid}}</td>
                            <td>${{$product->price}}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" wire:click="view_product({{$product->id}})" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:;" wire:click="edit_product({{$product->id}})" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="javascript:;" wire:click="delete_product({{$product->id}})" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="fa-solid fa-trash"></i></a>
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
