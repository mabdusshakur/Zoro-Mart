<div wire:ignore.self class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered product__modal" role="document">
        <div class="modal-content">
            <div class="product__modal-wrapper p-relative">
                <div class="product__modal-close p-absolute">
                    <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                </div>
                <div class="product__modal-inner">

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-box">
                                @php
                                    $images = \App\Models\product_image::where('product_uid', $product_uid)->get();
                                @endphp
                                <div class="tab-content" id="modalTabContent">

                                    <div class="row">
                                        @foreach ($images as $image)
                                            <div class="col-md-4">
                                                <img src="{{ Storage::url($image->image) }}" width="140rem"
                                                    class="img-thumbnail" height="140rem" alt="">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-content">
                                <h4><a href="product-details.html">{{ $product_name }}</a></h4>
                                <div class="product__modal-des mb-40">
                                    <p>{{ $product_description }} </p>
                                </div>
                                <div class="product__stock">
                                    <span>Availability : {{ $product_quantity }}</span>
                                    @if ($product_quantity > 0)
                                        <span>In Stock</span>
                                    @else
                                        <span class="text-danger">Out Of Stock</span>
                                    @endif
                                </div>
                                <div class="product__review d-sm-flex">
                                    <div class="rating rating__shop mb-15 mr-35">
                                        <ul>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__add-review mb-15">
                                        <span><a href="#">1 Review</a></span>
                                        <span><a href="#">Add Review</a></span>
                                    </div>
                                </div>
                                <div class="product__price">
                                    <span>${{ $product_price }}</span>
                                </div>
                                <div class="product__modal-form mb-30">
                                    <form action="#">
                                        <div class="pro-quan-area d-lg-flex align-items-center">
                                            <div class="product-quantity mr-20 mb-25">
                                                <div class="cart-plus-minus p-relative"><input type="text"
                                                        value="1" /></div>
                                            </div>
                                            <div class="pro-cart-btn mb-25">
                                                <button class="t-y-btn" type="submit"
                                                    wire:click="addToCart({{ $product_id }})">Add to cart</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="product__modal-links">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" wire:click="addToWishlist({{ $product_id }})"
                                                title="Add to Wishlist">
                                                <i class="fal fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Print">
                                                <i class="fal fa-print"></i></a>
                                        </li>
                                        <li><a href="#" title="Print">
                                                <i class="fal fa-share-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
