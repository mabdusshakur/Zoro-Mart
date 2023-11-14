<div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
    <a href="javascript:void(0);" class="cart__toggle">
        <span class="cart__total-item">01</span>
    </a>
    <span class="cart__content">
        <span class="cart__my">My Cart:</span>
        <span class="cart__total-price">$ 255.00</span>
    </span>
    <div class="cart__mini">
        <div class="cart__close">
            <button type="button" class="cart__close-btn"><i
                    class="fal fa-times"></i></button>
        </div>
        <ul>
            <li>
                <div class="cart__title">
                    <h4>My Cart</h4>
                    <span>(1 Item in Cart)</span>
                </div>
            </li>
            <li>
                <div class="cart__item d-flex justify-content-between align-items-center">
                    <div class="cart__inner d-flex">
                        <div class="cart__thumb">
                            <a href="product-details.html">
                                <img src="{{ asset('user/assets/img/shop/product/cart/cart-mini-1.jpg') }}"
                                    alt="" />
                            </a>
                        </div>
                        <div class="cart__details">
                            <h6><a href="product-details.html"> Samsung C49J89: £875,
                                    Debenhams Plus </a></h6>
                            <div class="cart__price">
                                <span>$255.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart__del">
                        <a href="#"><i class="fal fa-trash-alt"></i></a>
                    </div>
                </div>
            </li>
            <li>
                <div class="cart__sub d-flex justify-content-between align-items-center">
                    <h6>Car Subtotal</h6>
                    <span class="cart__sub-total">$255.00</span>
                </div>
            </li>
            <li>
                <a href="{{ route('user.checkout') }}" class="t-y-btn w-100 mb-10">Proceed to
                    checkout</a>
                <a href="{{ route('user.cart') }}" class="t-y-btn t-y-btn-border w-100 mb-10">view
                    add edit cart</a>
            </li>
        </ul>
    </div>
</div>