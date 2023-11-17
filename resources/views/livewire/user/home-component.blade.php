<div>
    
    @include('partials.user._inlcudes')
    <!-- slider area satrt -->
    @include('partials.user._slider_area')
    <!-- slider area end -->
    
    @include('partials.user._alerts')
    <!-- features area start -->
    <section class="features__area pt-40 pb-20 pl-10 pr-10">
        <div class="container">
            <div class="features__inner">
                <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-rocket-launch"></i>
                            </div>
                            <div class="features__content">
                                <h6>Free Shipping</h6>
                                <p>Free Shipping On All Order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-sync"></i>
                            </div>
                            <div class="features__content">
                                <h6>Money Guarantee</h6>
                                <p>30 Day Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-user-headset"></i>
                            </div>
                            <div class="features__content">
                                <h6>Online Support 24/7</h6>
                                <p>Technical Support Stand By</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-thumbs-up"></i>
                            </div>
                            <div class="features__content">
                                <h6>Secure Payment</h6>
                                <p>All Payment Method are accepted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-badge-dollar"></i>
                            </div>
                            <div class="features__content">
                                <h6>Member Discount</h6>
                                <p>Upto 40% Discount All Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features area end -->
    <!-- best selling area start -->
    <section class="best__sell pt-15 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-md-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>Best Selling<span>Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="best-sell-tabContent">
                        <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                            <div class="product__slider owl-carousel">
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-2.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> High Quality
                                                Glass Ultra-Thin Kitchen Scale</a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-3.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-4.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> LG 27UD58:
                                                £347.21, Ebuyer.com </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$560.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-5.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-6.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung
                                                C49J89: £875, Debenhams Plus </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$450.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-9.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-10.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blue t-shir
                                                for men (X, M, XL, XXL) </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-11.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-12.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung A20
                                                Pro Ultra CPU 4/64 GB </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="product__slider owl-carousel">
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-2.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> High Quality
                                                Glass Ultra-Thin Kitchen Scale</a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-3.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-4.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> LG 27UD58:
                                                £347.21, Ebuyer.com </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$560.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-5.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-6.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung
                                                C49J89: £875, Debenhams Plus </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$450.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-9.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-10.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blue t-shir
                                                for men (X, M, XL, XXL) </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-11.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-12.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung A20
                                                Pro Ultra CPU 4/64 GB </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                            <div class="product__slider owl-carousel">
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-2.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> High Quality
                                                Glass Ultra-Thin Kitchen Scale</a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-3.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-4.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> LG 27UD58:
                                                £347.21, Ebuyer.com </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$560.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-5.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-6.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung
                                                C49J89: £875, Debenhams Plus </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$450.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-9.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-10.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blue
                                                t-shir for men (X, M, XL, XXL) </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-11.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-12.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung
                                                A20 Pro Ultra CPU 4/64 GB </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="random" role="tabpanel" aria-labelledby="random-tab">
                            <div class="product__slider owl-carousel">
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-2.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> High
                                                Quality Glass Ultra-Thin Kitchen Scale</a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-3.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-4.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> LG 27UD58:
                                                £347.21, Ebuyer.com </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$560.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-5.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-6.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung
                                                C49J89: £875, Debenhams Plus </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$450.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-9.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-10.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blue
                                                t-shir for men (X, M, XL, XXL) </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-11.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-12.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung
                                                A20 Pro Ultra CPU 4/64 GB </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item product__item-2 white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                                alt="product" />
                                            <img class="second-img"
                                                src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                                alt="product" />
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId"><i
                                                            class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i
                                                            class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home
                                                Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best selling area end -->

    <!-- deal off the day area start -->
    <section class="deal__area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__head d-md-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>Deals<span>Of The Day</span></h3>
                        </div>
                    </div>
                    <div class="product__deal owl-carousel">
                        <div class="product__deal-item">
                            <div class="product__item product__item-2 product__sale mb-30">
                                <div class="row">
                                    <div class="col-xl-6  col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__thumb product__thumb-big p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{ asset('user/assets/img/shop/product/product-15.jpg') }}"
                                                    alt="product" />
                                                <img class="second-img"
                                                    src="{{ asset('user/assets/img/shop/product/product-24.jpg') }}"
                                                    alt="product" />
                                            </a>
                                            <div class="product__offer">
                                                <span class="discount">-34%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__content product__content-2">
                                            <h6 class="product-name product__deal-name">
                                                <a class="product-item-link" href="product-details.html">
                                                    Original Mobile Android Dual SIM Smart Phone G3 </a>
                                            </h6>
                                            <div class="rating rating-2">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="new mb-5">$120.00</span>
                                            <span class="price-old mb-5"> <del>$125.00</del> </span>
                                            <p class="mt-10">Typi non habent claritatem insitam, est usus
                                                legentis in iis qui facit...</p>
                                            <div class="product__countdown">
                                                <h4>Hurry Up! Offer ends in:</h4>
                                                <div class="countdown-wrapper">
                                                    <div data-countdown data-date="Dec 02 2022 20:20:22">
                                                        <ul>
                                                            <li>
                                                                <span data-days>0</span>
                                                                <p>Days</p>
                                                            </li>
                                                            <li>
                                                                <span data-hours>0</span>
                                                                <p>Hours</p>
                                                            </li>
                                                            <li>
                                                                <span data-minutes>0</span>
                                                                <p>mins</p>
                                                            </li>
                                                            <li>
                                                                <span data-seconds>0</span>
                                                                <p>secs</p>
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
                        <div class="product__deal-item">
                            <div class="product__item product__item-2 product__sale mb-30">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__thumb product__thumb-big p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{ asset('user/assets/img/shop/product/product-15.jpg') }}"
                                                    alt="product" />
                                                <img class="second-img"
                                                    src="{{ asset('user/assets/img/shop/product/product-24.jpg') }}"
                                                    alt="product" />
                                            </a>
                                            <div class="product__offer">
                                                <span class="discount">-34%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__content product__content-2">
                                            <h6 class="product-name product__deal-name">
                                                <a class="product-item-link" href="product-details.html">
                                                    Original Mobile Android Dual SIM Smart Phone G3 </a>
                                            </h6>
                                            <div class="rating rating-2">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="new mb-5">$120.00</span>
                                            <span class="price-old mb-5"> <del>$125.00</del> </span>
                                            <p class="mt-10">Typi non habent claritatem insitam, est usus
                                                legentis in iis qui facit...</p>
                                            <div class="product__countdown">
                                                <h4>Hurry Up! Offer ends in:</h4>
                                                <div class="countdown-wrapper">
                                                    <div data-countdown data-date="Dec 02 2022 20:20:22">
                                                        <ul>
                                                            <li>
                                                                <span data-days>0</span>
                                                                <p>Days</p>
                                                            </li>
                                                            <li>
                                                                <span data-hours>0</span>
                                                                <p>Hours</p>
                                                            </li>
                                                            <li>
                                                                <span data-minutes>0</span>
                                                                <p>mins</p>
                                                            </li>
                                                            <li>
                                                                <span data-seconds>0</span>
                                                                <p>secs</p>
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
                </div>
                <div class="col-xl-6">
                    <div class="section__head d-md-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>Electronic & Digital<span>Products</span></h3>
                        </div>
                    </div>
                    <div class="product__electronic owl-carousel">
                        <div class="product__electronic-item">
                            <div class="product__item product__item-2 white-bg">
                                <div class="product__thumb p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-2.jpg') }}"
                                            alt="product" />
                                    </a>
                                    <div class="product__offer">
                                        <span class="discount">-34%</span>
                                    </div>
                                    <div class="product__action p-absolute">
                                        <ul>
                                            <li>
                                                <a href="#" title="Add to Wishlist"><i
                                                        class="fal fa-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId"><i
                                                        class="fal fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i
                                                        class="far fa-sliders-h"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content text-center">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html"> High Quality
                                            Glass Ultra-Thin Kitchen Scale</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="price">$500.00</span>
                                </div>
                                <div class="product__add-btn">
                                    <button type="button">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product__electronic-item">
                            <div class="product__item product__item-2 white-bg">
                                <div class="product__thumb p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-3.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-4.jpg') }}"
                                            alt="product" />
                                    </a>
                                    <div class="product__offer">
                                        <span class="discount">-34%</span>
                                    </div>
                                    <div class="product__action p-absolute">
                                        <ul>
                                            <li>
                                                <a href="#" title="Add to Wishlist"><i
                                                        class="fal fa-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId"><i
                                                        class="fal fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i
                                                        class="far fa-sliders-h"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content text-center">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html"> LG 27UD58:
                                            £347.21, Ebuyer.com </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="price">$560.00</span>
                                </div>
                                <div class="product__add-btn">
                                    <button type="button">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product__electronic-item">
                            <div class="product__item product__item-2 white-bg">
                                <div class="product__thumb p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-5.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-6.jpg') }}"
                                            alt="product" />
                                    </a>
                                    <div class="product__offer">
                                        <span class="discount">-34%</span>
                                    </div>
                                    <div class="product__action p-absolute">
                                        <ul>
                                            <li>
                                                <a href="#" title="Add to Wishlist"><i
                                                        class="fal fa-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId"><i
                                                        class="fal fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i
                                                        class="far fa-sliders-h"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content text-center">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html"> Samsung
                                            C49J89: £875, Debenhams Plus </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="price">$450.00</span>
                                </div>
                                <div class="product__add-btn">
                                    <button type="button">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product__electronic-item">
                            <div class="product__item product__item-2 white-bg">
                                <div class="product__thumb p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                            alt="product" />
                                    </a>
                                    <div class="product__offer">
                                        <span class="discount">-34%</span>
                                    </div>
                                    <div class="product__action p-absolute">
                                        <ul>
                                            <li>
                                                <a href="#" title="Add to Wishlist"><i
                                                        class="fal fa-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId"><i
                                                        class="fal fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i
                                                        class="far fa-sliders-h"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content text-center">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html"> Blink Home
                                            Security Camera System 01 </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="price">$720.00</span>
                                </div>
                                <div class="product__add-btn">
                                    <button type="button">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deal off the day area end -->

    <!-- onsale product area start -->
    <section class="onsell__area pt-15 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>On Sale<span>Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="sale__slider owl-carousel">
                        <div class="product__item-wrapper">
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-12.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-8.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">Smart Mobile
                                            Phone 7/7plus/8/8plus/X/Xr W </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$720.00</span>
                                    <span class="price-old"> <del>$800.00</del> </span>
                                </div>
                            </div>
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-14.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">Portable Watch
                                            Phone with Blood Pressure Monitor OLED</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$90.00</span>
                                    <span class="price-old"> <del>$100.00</del> </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-wrapper">
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-13.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">New Model Watch
                                            Mobile with Bpm Function 1.14" IPS LCD IP68</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$150.00</span>
                                    <span class="price-old"> <del>$200.00</del> </span>
                                </div>
                            </div>
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-15.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-24.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">Original Mobile
                                            Android Dual SIM Smart Phone G3 </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$90.00</span>
                                    <span class="price-old"> <del>$100.00</del> </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-wrapper">
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-16.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-18.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">TF Camera Clock
                                            Support Bt 4.0 for Ios Android Round Watch </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$40.00</span>
                                    <span class="price-old"> <del>$100.00</del> </span>
                                </div>
                            </div>
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-22.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-1.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html"> 24 Inch LCD
                                            Monitor with Touch Screen for Computer Display </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$90.00</span>
                                    <span class="price-old"> <del>$100.00</del> </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-wrapper">
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-2.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-4.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">Capacitive
                                            Touch Screen 22 Inch Advertising LCD Display Monitor </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$190.00</span>
                                    <span class="price-old"> <del>$200.00</del> </span>
                                </div>
                            </div>
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-20.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-11.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html"> Original Smart
                                            Phone for Original for iPhone 6s </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$250.00</span>
                                    <span class="price-old"> <del>$300.00</del> </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-wrapper">
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-13.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-7.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">New Model Watch
                                            Mobile with Bpm Function 1.14" IPS LCD IP68</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$150.00</span>
                                    <span class="price-old"> <del>$200.00</del> </span>
                                </div>
                            </div>
                            <div class="product__item product__item-2 white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset('user/assets/img/shop/product/product-15.jpg') }}"
                                            alt="product" />
                                        <img class="second-img"
                                            src="{{ asset('user/assets/img/shop/product/product-24.jpg') }}"
                                            alt="product" />
                                    </a>
                                </div>
                                <div class="product__content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="product-details.html">Original Mobile
                                            Android Dual SIM Smart Phone G3 </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="new new-2">$90.00</span>
                                    <span class="price-old"> <del>$100.00</del> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- onsale product area end -->

    <!-- subscribe area start -->
    <section class="subscribe__area pt-35 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="subscribe__content d-sm-flex align-items-center">
                        <div class="subscribe__icon mr-25">
                            <img src="{{ asset('user/assets/img/icon/icon_email.png') }}" alt="" />
                        </div>
                        <div class="subscribe__text">
                            <h4>Sign up to Newsletter</h4>
                            <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First
                                    Shopping</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="subscribe__form f-right">
                        <form action="#">
                            <input type="email" placeholder="Enter your email here..." />
                            <button class="t-y-btn t-y-btn-sub">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe area end -->

    <!-- back to top btn area start -->
    <section class="back-btn-top">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-xl-12">
                    <div id="scroll" class="back-to-top-btn back-to-top-btn-2 text-center">
                        <a href="javascript:void(0);">back to top</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- back to top btn area end -->

    <!-- shop modal start -->
    @include('partials.user._shop_modal')
    <!-- shop modal end -->
</div>
