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
                            <h4 class="mb-0">{{$total_users >= 1000 ? number_format($total_users / 1000, 1) . 'K' : $total_users }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-primary text-white">
                            <i class="fa-solid fa-user"></i>
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
                            <h4 class="mb-0">{{$total_products >= 1000 ? number_format($total_products / 1000, 1) . 'K' : $total_products }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-info text-white">
                            <i class="fa-solid fa-boxes-stacked"></i>
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
                            <h4 class="mb-0">{{ $total_orders >= 1000 ? number_format($total_orders / 1000, 1) . 'K' : $total_orders }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-success text-white">
                            <i class="fa-solid fa-truck-fast"></i>
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
                            <p class="mb-1">Total Sales</p>
                            <h4 class="mb-0">{{ $total_sales >= 1000 ? number_format($total_sales / 1000, 1) . 'K' : $total_sales }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-warning text-white">
                            <i class="fa-solid fa-dollar-sign"></i>
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
                            <p class="mb-1">Total Categories</p>
                            <h4 class="mb-0">{{ $total_categories >= 1000 ? number_format($total_categories / 1000, 1) . 'K' : $total_categories }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-dark text-white">
                            <i class="fa-solid fa-table-columns"></i>
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
                            <p class="mb-1">Total Sub-Categories</p>
                            <h4 class="mb-0">{{ $total_subcategories >= 1000 ? number_format($total_subcategories / 1000, 1) . 'K' : $total_subcategories }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-danger text-white">
                            <i class="fa-solid fa-table-cells"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
