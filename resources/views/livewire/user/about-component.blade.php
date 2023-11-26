<div>

    @include('partials.user._inlcudes')

    @include('partials.user._alerts')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6">
                <h1>About Us</h1>
            </div>
            <div class="col-md-12">
                <p>
                    {{$about}}
                </p>
            </div>
        </div>
    </div>
    <!-- footer area start -->
    @include('layouts.user.partials._footer')
    <!-- footer area end -->
</div>
