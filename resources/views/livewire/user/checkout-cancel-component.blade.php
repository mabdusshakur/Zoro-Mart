<div>
    @include('partials.user._inlcudes')
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Checkout')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->


    @include('partials.user._alerts')

    <h1>Cancel Page</h1>

        <!-- footer area start -->
        @include('layouts.user.partials._footer')
        <!-- footer area end -->
    
</div>
