<div>
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Products')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->

    <!-- product area start -->
    <section class="product__area box-plr-75 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-3 col-lg-4">
                    <div class="product__widget">
                        <div class="product__widget-item mb-15">
                            <div class="accordion" id="productWidgetAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button product__widget-title" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Color
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="product__widget-content">
                                                <div class="product__color pt-10">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="black"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="blue"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="red"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="yellow"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="pink"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="brown"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="green"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="oragne"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__widget-item mb-15">
                            <div class="accordion" id="productWidgetAccordion1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button product__widget-title" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Price
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo" data-bs-parent="#productWidgetAccordion1">
                                        <div class="accordion-body">
                                            <div class="product__widget-content">
                                                <div class="product__price-slider">
                                                    <form action="#">
                                                        <div class="row">
                                                            <input class="form-control form-control mb-3" type="text"
                                                                placeholder="Product Name" wire:model="minPrice">
                                                            <input class="form-control form-control mb-3" type="text"
                                                                placeholder="Product Name" wire:model="maxPrice">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product__widget-item">
                            <h3 class="product__widget-title mb-25">Top Rate</h3>
                            <div class="product__sm">
                                <ul>
                                    <li class="product__sm-item d-flex align-items-center">
                                        <div class="product__sm-thumb mr-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('user/assets/img/shop/product/sm/product-sm-1.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product__sm-content">
                                            <h3 class="product__sm-title">
                                                <a href="#">Organic Greenhouse Tomatoes New 18kg</a>
                                            </h3>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__sm-price">
                                                <span class="price">$300.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product__sm-item d-flex align-items-center">
                                        <div class="product__sm-thumb mr-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('user/assets/img/shop/product/sm/product-sm-2.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product__sm-content">
                                            <h3 class="product__sm-title">
                                                <a href="#">Australian Large Granny Smith Apples</a>
                                            </h3>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__sm-price">
                                                <span class="price">$120.00</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                    <div class="product__grid-wrapper">
                        <div class="product__grid-banner w-img">
                            <img src="{{ asset('user/assets/img/banner/product-grid-banner.jpg') }}" alt="">
                        </div>
                        <div class="product__grid-item-wrapper pt-70">
                            <div class="product__filter mb-50">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="product__filter-left d-sm-flex align-items-center">
                                            <div class="product__col">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="FourCol-tab"
                                                            data-bs-toggle="tab" data-bs-target="#FourCol"
                                                            type="button" role="tab" aria-controls="FourCol"
                                                            aria-selected="true">
                                                            <i class="fal fa-border-all"></i>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="FiveCol-tab"
                                                            data-bs-toggle="tab" data-bs-target="#FiveCol"
                                                            type="button" role="tab" aria-controls="FiveCol"
                                                            aria-selected="false">
                                                            <i class="fal fa-th"></i>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="list-tab" data-bs-toggle="tab"
                                                            data-bs-target="#list" type="button" role="tab"
                                                            aria-controls="list" aria-selected="false">
                                                            <i class="fal fa-list"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product__result pl-60">
                                                <p>Showing 1-20 of 29 relults</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div
                                            class="product__filter-right d-flex align-items-center justify-content-md-end">
                                            <div class="product__sorting product__show-no">
                                                <select wire:model="per_page_item">
                                                    <option selected>Item Count</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                </select>
                                            </div>
                                            <div class="product__sorting product__show-position ml-20">
                                                <select>
                                                    <option>Position</option>
                                                    <option>Poduct Name</option>
                                                    <option>Price</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="productGridTabContent">

                                <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                                    aria-labelledby="FourCol-tab">
                                    <div class="row">

                                        @foreach ($products as $product)
                                            @php
                                                $images = App\Models\product_image::where('product_uid', $product->product_uid)->get();
                                            @endphp

                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">

                                                            @if ($images->count() > 0)
                                                                <img src="{{ Storage::url($images[0]->image) }}"
                                                                    alt="product">
                                                            @endif

                                                            @if ($images->count() > 1)
                                                                <img class="second-img"
                                                                    src="{{ Storage::url($images[1]->image) }}"
                                                                    alt="product">
                                                            @endif

                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="{{ route('user.product-details') }}">
                                                                {{ $product->name }}</a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">${{ $product->price }}</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="FiveCol" role="tabpanel"
                                    aria-labelledby="FiveCol-tab">
                                    @foreach ($products as $product)
                                        @php
                                            $images = App\Models\product_image::where('product_uid', $product->product_uid)->get();
                                        @endphp
                                        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-4">
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            @if ($images->count() > 0)
                                                                <img src="{{ Storage::url($images[0]->image) }}"
                                                                    alt="product">
                                                            @endif

                                                            @if ($images->count() > 1)
                                                                <img class="second-img"
                                                                    src="{{ Storage::url($images[1]->image) }}"
                                                                    alt="product">
                                                            @endif

                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
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
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">${{ $product->price }}</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="tab-pane fade" id="list" role="tabpanel"
                                    aria-labelledby="list-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @php
                                                $images = App\Models\product_image::where('product_uid', $product->product_uid)->get();
                                            @endphp
                                            <div class="col-xxl-12">
                                                <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                    <div class="product__thumb p-relative mr-20">
                                                        <a href="product-details.html" class="w-img">
                                                            @if ($images->count() > 0)
                                                                <img src="{{ Storage::url($images[0]->image) }}"
                                                                    alt="product">
                                                            @endif

                                                            @if ($images->count() > 1)
                                                                <img class="second-img"
                                                                    src="{{ Storage::url($images[1]->image) }}"
                                                                    alt="product">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="product-details.html">{{ $product->name }}</a>
                                                        </h6>
                                                        <div
                                                            class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                                </li>
                                                            </ul>
                                                            <div class="product-review-action ml-30">
                                                                <span><a href="#">2 Reviews</a></span>
                                                                <span><a href="#">Add Your Review</a></span>
                                                            </div>
                                                        </div>
                                                        <span class="price">${{ $product->price }}</span>
                                                        <p class="product-text">
                                                            {{ Str::limit($product->description, 100) }} </p>
                                                        <div class="product__list-features">
                                                            <ul>
                                                                <li>Light green crewneck sweatshirt.</li>
                                                                <li>Hand pockets.</li>
                                                                <li>Relaxed fit.</li>
                                                                <li>Machine wash/dry.</li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <button class="t-y-btn mr-10">add to cart</button>
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="basic-pagination pt-30 pb-30">
                                        <nav>
                                            <ul>
                                                {{ $products->links('partials.user._pagination') }}
                                            </ul>
                                        </nav>
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

    <!-- shop modal start -->
    @include('partials.user._shop_modal')
    <!-- shop modal end -->
</div>
