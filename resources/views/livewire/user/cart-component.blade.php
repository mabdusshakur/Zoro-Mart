<div>
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Your Cart')
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
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.html"><img
                                                        src="assets/img/shop/product/product-1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a
                                                    href="product-details.html">{{ $item->product->name }}</a>
                                            </td>
                                            <td class="product-price"><span
                                                    class="amount">${{ number_format($item->product->price, 2) }}</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="col-md-6  mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="" class="form-control"><i
                                                                    class="fa-solid fa-minus"></i></a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control"
                                                                value="{{ $item->quantity }}">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="" class="form-control"><i
                                                                    class="fa-solid fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span
                                                    class="amount">${{ number_format($item->product->price * $item->quantity, 2) }}</span>
                                            </td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a>
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
