<div>
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Product Details')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->

    @include('partials.user._alerts')
    <!-- product area start -->
    <section class="product__area box-plr-75 pb-70">
        <div class="container-fluid">
            <div class="row">
                @foreach ($products as $product)
                    @php
                        $images = App\Models\product_image::where('product_uid', $product->product_uid)->get();
                    @endphp

                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productThumbContent">
                                    <div class="row">
                                        @foreach ($images as $image)
                                            <div class="col-md-3">
                                                <img src="{{ Storage::url($image->image) }}" class="img-thumbnail"
                                                    alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="product__details-wrapper">
                            <div class="product__details">
                                <h3 class="product__details-title">
                                    <a href="product-details.html">{{ $product->name }}</a>
                                </h3>
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
                                    @if ($product->discount_price == null)
                                        <span class="new">${{ $product->price }}</span>
                                    @else
                                        <span class="new">${{ $product->price }}</span>
                                        <span class="old">${{ $product->discount_price }}</span>
                                    @endif
                                </div>
                                <div class="product__stock">
                                    <span>Availability :</span>
                                    <span>In Stock</span>
                                </div>
                                <div class="product__details-des mb-30">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div class="product__details-stock">
                                    <h3><span>Hurry Up!</span> Only {{ $product->quantity }} products left in stock.
                                    </h3>
                                    {{-- <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                    role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    data-width="70%"></div>
                            </div> --}}
                                </div>
                                {{-- <div class="product__details-color d-flex align-items-center mb-15">
                            <span>Colors</span>
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#" class="blue"></a>
                                </li>
                                <li>
                                    <a href="#" class="red"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__details-size d-flex align-items-center mb-25">
                            <span>Size</span>
                            <ul>
                                <li>
                                    <a href="#">55</a>
                                </li>
                                <li>
                                    <a href="#">65</a>
                                </li>
                                <li>
                                    <a href="#">70</a>
                                </li>
                            </ul>
                        </div> --}}
                                <div class="product__details-quantity mb-20">
                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                        <div class="product-quantity mr-20 mb-25">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" value="1"
                                                        wire:model="product_quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-cart-btn mb-25">
                                            <button class="t-y-btn" type="submit"
                                                wire:click="addToCart({{ $product->id }})">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__details-action">
                                    <ul>
                                        <li><a href="javascript:;" wire:click="addToWishlist({{ $product->id }})"
                                                title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Share"><i class="fal fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="product__details-des-tab mb-40 mt-110">
                        <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="des-tab" data-bs-toggle="tab"
                                    data-bs-target="#des" type="button" role="tab" aria-controls="des"
                                    aria-selected="true">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review" aria-selected="false">Review
                                    {{ $product->productReviews->count() }}</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="tab-content" id="prodductDesTaContent">
                        <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                            <div class="product__details-des-wrapper">
                                <div class="product__details-des mb-20">
                                    <h3>{{ $product->name }}</h3>
                                    <p>"{{ $product->description }}"</p>
                                </div>
                                <div class="product__details-des-banner w-img">
                                    <img src="{{ 'user/assets/img/shop/product/details/product-details-banner.jpg' }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="product__details-review">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        @livewire('user.all-reviews-component', ['product_id' => $product->id])
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <div class="review-form">
                                            <h3>Your Reviewing</h3>
                                            <p>{{ $product->name }}</p>
                                            @livewire('user.review-component', ['product_id' => $product->id])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- product area start -->
    <section class="product__area box-plr-75 pb-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__head mb-40">
                        <div class="section__title">
                            <h3>Best Selling<span> Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="product__slider owl-carousel">
                        @foreach ($best_selling_products as $product)
                            @php
                                $images = App\Models\product_image::where('product_uid', $product->product_uid)->get();
                            @endphp
                            <div class="product__item white-bg mb-30">
                                <div class="product__thumb p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ Storage::url($images[0]->image) }}" alt="product" />
                                        <img class="second-img"
                                            src="{{ count($images) > 1 ? Storage::url($images[1]->image) : Storage::url($images[0]->image) }}"
                                            alt="product" />
                                    </a>
                                    <div class="product__action p-absolute">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i
                                                        class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                            </li>
                                            <li><a href="#" title="Compare"><i
                                                        class="far fa-sliders-h"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content text-center">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">
                                            {{ $product->name }}</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            @if ($product->productReviews->count() > 0)
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($i < $product->productReviews->avg('rating'))
                                                        <li><a><i class="fa-solid fa-star"
                                                                    style="color: #e6c002;"></i></a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a>
                                                                <i class="fa-regular fa-star"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endfor
                                            @endif
                                        </ul>
                                    </div>
                                    <span class="price">${{ $product->price }}</span>
                                </div>
                                <div class="product__add-btn">
                                    <button type="button">Add to Cart</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- shop modal start -->
    @include('partials.user._shop_modal')
    <!-- shop modal end -->
</div>
