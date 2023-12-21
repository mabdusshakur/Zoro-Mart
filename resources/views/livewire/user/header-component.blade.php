<div>
    <header class="yellow-header">
        <div class="header__area">
            <div class="header__top d-none d-sm-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                            <div class="header__welcome">
                                <span>Welcome to {{ $utility->web_name ?? config('app.name') }}</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-7">
                            <div class="header__action d-flex justify-content-center justify-content-md-end">
                                <ul>
                                    @if (Auth::check())
                                        <li><a href="{{ route('user.profile') }}">My Account</a></li>
                                        <li><a href="{{ route('user.wishlist') }}">My Wishlist</a></li>
                                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                    @else
                                        <li><a href="{{ route('user.login') }}">Sign In</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__info">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-3">
                            <div
                                class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                                <div class="header__hotline align-items-center d-none d-sm-flex d-lg-none d-xl-flex">
                                    <div class="header__hotline-icon">
                                        <i class="fal fa-headset"></i>
                                    </div>
                                    <div class="header__hotline-info">
                                        <span>Hotline Free:</span>
                                        <h6>{{ $utility->hotline ?? '' }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <div class="header__info-right">
                                <div class="header__search f-left d-none d-sm-block">
                                    @livewire('user.search-component')
                                </div>
                                @auth
                                    @livewire('user.mini-cart-component')
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                            <div class="header__bottom-left d-flex d-xl-block align-items-center">
                                <div class="side-menu d-xl-none mr-20">
                                    <button type="button" class="side-menu-btn side-menu-btn-2 offcanvas-toggle-btn"><i
                                            class="fas fa-bars"></i></button>
                                </div>
                                <div class="main-menu main-menu-2 d-none d-md-block">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{ route('user.home') }}">Home</a>
                                            </li>
                                            <li><a href="{{ route('user.about') }}">about us</a></li>
                                            <li><a href="{{ route('user.contact') }}">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
