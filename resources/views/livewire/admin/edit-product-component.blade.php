<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Add Product')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Edite Product</h6>
        </div>
        <form wire:submit.prevent="edit_product">
            <div class="card-body">
                <input class="form-control form-control mb-3" type="text" placeholder="Product Name"
                    wire:model="product_name">
                <textarea class="form-control mb-3" placeholder="Product Description" rows="6" wire:model="description"></textarea>

                <div class="row">
                    <div class="col-md-6">
                        <label for="product_image_input" class="form-label">Select Product Image's</label>
                        <input class="form-control mb-3" type="file" multiple="" id="product_image_input"
                            wire:model="product_image">

                        <label for="product_price_input" class="form-label">Enter Product Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="number" class="form-control" id="product_price_input" wire:model="price">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="product_price_input" class="form-label">Select Product Category</label>
                        <select class="form-select mb-3" wire:model="category_id">
                            <option selected="">Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <label for="product_price_input" class="form-label">Select Product Sub-Category</label>
                        <select class="form-select mb-3" wire:model="sub_category_id">
                            <option selected="">Sub-Category</option>
                            @foreach ($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <label for="product_quantity_input" class="form-label">Select Product Stock-quantity
                        Available</label>
                    <input type="number" class="form-control" id="product_quantity_input" wire:model="quantity">
                </div>


                @if ($old_product_image)
                    @foreach ($old_product_image as $image)
                        <div class="col-md-6 mt-2 mb-2">
                            <img src="{{ Storage::url($image->image) }}" class="img-fluid img-thumbnail"
                                alt="product images" height="120rem" width="120rem" />
                            <a href="" class="text-danger"
                                wire:click.prevent="delete_image({{ $image->id }})"><i class="fa fa-x"> </i></a>
                        </div>
                    @endforeach
                @endif

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Update Product</button>
                </div>
            </div>
        </form>
    </div>


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Product Preview</h6>
        </div>
        <div class="card-body">
            <h1>{{$product_name}}</h1>
            <p><u>Short Description </u>:  {{Str::limit($description, 60)}}</p>
            <p><u>Description </u>:  {{$description}}</p>
            <div class="row">
                <div class="col-md-3">
                    <h4><u>Price </u> : $  {{$price}}</h4>
                </div>
                <div class="col-md-3">
                    <h4><u>Quantity </u>: {{$quantity}}</h4>
                </div>

                <div class="col-md-6">
                    <h5><u>Category </u>:  {{$category_name}}</h5>
                    <hr>
                    <h6><u>Sub Category </u>:  {{$sub_category_name}}</h6>
                </div>
            </div>
            <hr>
            <div class="col-md-12">
                <div class="row">
                    @if ($product_image)
                        @foreach ($product_image as $image)
                            <div class="col-md-3">
                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid img-thumbnail"
                                    alt="product images" />
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

</div>
