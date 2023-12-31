<div>
    <form action="#">
        <input type="text" placeholder="What are you searching for?" wire:model="main_search">
    </form>
    @foreach ($live_search_products as $product)
    @php
    $images = App\Models\product_image::where('product_uid', $product->product_uid)->get()->take(1);
    @endphp
        <div class="row align-items-center justify-content-center mt-2">
            <div class="col-2">
                <img src="{{ Storage::url($images[0]->image) }}" alt="Product Image" width="30px"
                    height="30px" class="rounded-circle">
            </div>
            <div class="col-10">
                <a class="product-item-link" href="javascript:;" wire:click="viewProductDetails({{ $product->id }},'{{ $product->slug }}',{{ $product->category_id }},{{ $product->sub_category_id }})"> 
                    <h5>{{$product->name}}</h5>
                </a>
            </div>
        </div>
    @endforeach
</div>
