<div>
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Products')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->

    @include('partials.user._alerts')
    <!-- product area start -->
    <section class="product__area box-plr-75 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-3 col-lg-4">
                    <div class="product__widget">
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
                                                                placeholder="Min Price" wire:model="minPrice">
                                                            <input class="form-control form-control mb-3" type="text"
                                                                placeholder="Max Price" wire:model="maxPrice">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                    <div class="product__grid-wrapper">
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div
                                            class="product__filter-right d-flex align-items-center justify-content-md-end">
                                            <div class="product__sorting product__show-no">
                                                <select class="form-select" wire:model="per_page_item">
                                                    <option selected>Item Count</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                </select>
                                            </div>
                                            <div class="product__sorting product__show-position ml-20">
                                                <select class="form-select" wire:model="filter_item">
                                                    <option value="by_name">Poduct Name A-Z,1-0</option>
                                                    <option value="by_lowest_price">Lowest Price</option>
                                                    <option value="by_highest_price">Highest Price</option>
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
                                                        <a href="javascript:;"
                                                            wire:click="viewProductDetails({{ $product->id }},'{{ $product->slug }}',{{ $product->category_id }},{{ $product->sub_category_id }})"
                                                            class="w-img">

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
                                                                <li><a href="javascript:;"
                                                                        wire:click="addToWishlist({{ $product->id }})"
                                                                        title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#addProductModal"
                                                                        title="Quick View"
                                                                        wire:click="showProductModal({{ $product->id }})">
                                                                        <i class="fal fa-search"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="javascript:;"
                                                                wire:click="viewProductDetails({{ $product->id }},'{{ $product->slug }}',{{ $product->category_id }},{{ $product->sub_category_id }})">
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
                                                        <button type="button"
                                                            wire:click="addToCart({{ $product->id }})">Add to
                                                            Cart</button>
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
