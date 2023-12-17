<div>
    <div class="row">
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Search product name..." wire:model="main_search">
        </div>
        <div class="col-md-8">
            <div class="card position-absolute">
                @foreach ($live_search_products as $product)
                    @php
                    $images = App\Models\product_image::where('product_uid', $product->product_uid)->get()->take(1);
                    @endphp
                    <div class="row align-items-center justify-content-center mt-2">
                        <div class="col-md-2 col-sm-6">
                            <img src="{{ Storage::url($images[0]->image) }}" alt="Product Image" width="40px" height="40px"
                                class="rounded-circle">
                        </div>
                        <div class="col-md-10 col-sm-6 mt-2">
                            <a class="product-item-link" href="javascript:;"
                                wire:click="viewProductDetails({{ $product->id }},'{{ $product->slug }}',{{ $product->category_id }},{{ $product->sub_category_id }})">
                                <h5>{{ $product->name }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
