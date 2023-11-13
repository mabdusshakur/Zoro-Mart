<div>
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Wish List')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-name">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        <tr>
                                            <td class=""><a href="product-details.html"><img
                                                        src="assets/img/shop/product/product-1.jpg" alt=""></a>
                                            </td>
                                            <td class=""><a href="product-details.html">{{$wishlist->product->name}}</a></td>
                                            <td>
                                                <button class="t-y-btn t-y-btn-grey" type="submit">View
                                                    Product</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
