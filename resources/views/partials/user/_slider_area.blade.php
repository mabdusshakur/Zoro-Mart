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
                                            <a href="javascript:;"
                                                wire:click="goTogCategoryProducts({{ $category->id }},'{{ $category->slug }}')">
                                                {{ $category->name }}
                                            </a>
                                            <ul class="mega-menu">
                                                @foreach ($category->sub_categories as $subcategory)
                                                    <li>
                                                        <ul class="mega-item">
                                                            <li>
                                                                <a href="javascript:;"
                                                                    wire:click="goTogSubCategoryProducts({{ $category->id }},'{{ $category->slug }}', {{ $subcategory->id }})">
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
                            @foreach ($banners as $banner)
                                <div class="single-slider w-img">
                                    <img src="{{ Storage::url($banner->banner_image) }}" alt="slider" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-3 custom-col-3 col-lg-4 d-none d-md-block">
                        <div class="banner__area">
                            @foreach ($products->withCount('productViews')->sortByDesc('product_views_count')->sortByDesc('sold')->take(3) as $product)
                                @php
                                    $image = \App\Models\product_image::where('product_uid', $product->product_uid)->first();
                                @endphp
                                <div class="banner__item mb-20 w-img">
                                    <a>
                                        <img src="{{ Storage::url($image->image) }}" height="158rem"/>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
