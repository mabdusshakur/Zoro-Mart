<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="index.html">
                    {{-- <img src="{{ asset('user/assets/img/logo/logo-black.png') }}" alt="logo"> --}}
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                @livewire('user.mobile-search-component')
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
    </div>
</div>