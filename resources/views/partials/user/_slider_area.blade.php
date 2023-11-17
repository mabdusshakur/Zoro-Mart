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
                                        <a href="{{ route('user.products') }}">All Products</a>
                                    </li>

                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="javascript:;" wire:click="goTogCategoryProducts({{$category->id}},'{{ $category->slug}}')">
                                                {{ $category->name }}
                                            </a>
                                            <ul class="mega-menu">
                                                @foreach ($category->sub_categories as $subcategory)
                                                    <li>
                                                        <ul class="mega-item">
                                                            <li>
                                                                <a href="product-details.html">
                                                                    {{ $subcategory->name }}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
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
