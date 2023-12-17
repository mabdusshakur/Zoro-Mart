<div>
    <form action="#">
        <input type="text" placeholder="What are you searching for?" wire:model="main_search">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>
    @foreach ($live_search_products as $product)
        <div class="row align-items-center justify-content-center mt-2">
            <div class="col-2">
                <img src="{{ asset('admin/assets/images/avatars/01.png') }}" alt="Product Image" width="30px"
                    height="30px" class="rounded-circle">
            </div>
            <div class="col-10">
                <a class="product-item-link" href="javascript:;">
                    <h5>{{$product->name}}</h5>
                </a>
            </div>
        </div>
    @endforeach
</div>
