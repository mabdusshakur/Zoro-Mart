<section class="slider__area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 custom-col-2 d-none d-xl-block">
                <div class="cat__menu-wrapper">
                    <div class="cat-toggle cat-toggle-2">
                        <button type="button" class="cat-toggle-btn"><i class="fas fa-bars"></i> Shop by
                            department</button>
                        <div class="cat__menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('user.products')}}">All Products</a>
                                    </li>
                                    <li>
                                        <a href="product.html">Best Sell Products
                                            <span class="cat-label">hot!</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product.html">Top 10 Offers
                                            <span class="cat-label green">new!</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product.html">New Arrivals </a>
                                    </li>
                                    <li><a href="product.html">Phones & Tablets</a></li>
                                    <li><a href="product.html">Electronics & Digital</a></li>
                                    <li class="d-laptop-none"><a href="product.html">Fashion & Clothings</a>
                                    <li><a href="product.html">Health & Beauty</a></li>
                                    <li><a href="product.html">TV & Audio</a></li>
                                    <li><a href="product.html">Digital Products <i class="far fa-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li><a href="product.html">Windows Keys</a>
                                                <ul class="mega-item">
                                                    <li><a href="product-details.html">Windows 11</a></li>
                                                    <li><a href="product-details.html">Windows 10 Pro</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="product.html">Netflix Subscriptions</a>
                                                <ul class="mega-item">
                                                    <li><a href="product-details.html">1 Month</a></li>
                                                    <li><a href="product-details.html">3 Month</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="product.html">Games</a>
                                                <ul class="mega-item">
                                                    <li><a href="product-details.html">Gta 5</a></li>
                                                    <li><a href="product-details.html">Valorant</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 custom-col-10 col-lg-12">
                <div class="row">
                    <div class="col-xl-9 custom-col-9 col-lg-8">
                        <div class="slider__inner slider-active">
                            <div class="single-slider w-img">
                                <img src="{{ asset('user/assets/img/slider/02/slider-01.jpg') }}" alt="slider" />
                            </div>
                            <div class="single-slider w-img">
                                <img src="{{ asset('user/assets/img/slider/02/slider-02.jpg') }}" alt="slider" />
                            </div>
                            <div class="single-slider w-img">
                                <img src="{{ asset('user/assets/img/slider/02/slider-03.jpg') }}" alt="slider" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 custom-col-3 col-lg-4 d-none d-md-block">
                        <div class="banner__area">
                            <div class="banner__item mb-20 w-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('user/assets/img/banner/top/banner-top-3.jpg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="banner__item mb-20 w-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('user/assets/img/banner/top/banner-top-4.jpg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="banner__item w-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('user/assets/img/banner/top/banner-top-5.jpg') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
