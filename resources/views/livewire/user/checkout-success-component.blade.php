<div>
    @include('partials.user._inlcudes')
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Checkout')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->


    @include('partials.user._alerts')

    <h1>Thanks, {{$userName}} for choosing us.</h1>
</div>
