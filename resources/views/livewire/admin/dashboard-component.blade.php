<div>

    <!--start breadcrumb-->
    @section('current-page-name', 'Dashboard')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
            <div class="card rounded-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">Total Users</p>
                            <h4 class="mb-0">{{$total_users}}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-primary text-white">
                            <i class="bi bi-basket2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">Total Products</p>
                            <h4 class="mb-0">{{$total_products}}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-info text-white">
                            <i class="bi bi-basket2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">Total Orders</p>
                            <h4 class="mb-0">{{$total_orders}}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-success text-white">
                            <i class="bi bi-basket2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
