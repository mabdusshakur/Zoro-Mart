<div>
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Wish List')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->

    @include('partials.user._alerts')
    <!-- Cart Area Strat-->
    <section class="cart-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-name">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        @php
                                            $images = App\Models\product_image::where('product_uid', $wishlist->product->product_uid)->get();
                                        @endphp
                                        <tr>
                                            <td class=""><a><img src="{{ Storage::url($images[0]->image) }}"
                                                        class="img-thumbnail" alt="" height="120rem"
                                                        width="120rem"></a>
                                            </td>
                                            <td class=""><a>{{ $wishlist->product->name }}</a></td>
                                            <td>
                                                <a href="javascript:;"
                                                    wire:click="viewProductDetails({{ $wishlist->product->id }},'{{ $wishlist->product->slug }}',{{ $wishlist->product->category_id }},{{ $wishlist->product->sub_category_id }})"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:;" class="text-danger m-2"
                                                    wire:click="removeProduct({{ $wishlist->id }})"><i
                                                        class="fa-solid fa-trash"></i></a>
                                                {{-- <button class="t-y-btn t-y-btn-grey" type="submit">View Product</button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
