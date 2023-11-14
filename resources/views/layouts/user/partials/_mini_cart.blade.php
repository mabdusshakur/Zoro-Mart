<div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
    <a href="javascript:void(0);" class="cart__toggle">
        <span class="cart__total-item">{{$cart_item_count}}</span>
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
                    <span>({{$cart_item_count}} Item in Cart)</span>
                </div>
            </li>
            <li>
                @foreach ($cartItems as $item)
                @php
                    $images = \App\Models\product_image::where('product_uid', $item->product->product_uid)->get();
                @endphp
                <div class="cart__item d-flex justify-content-between align-items-center">
                    <div class="cart__inner d-flex">
                        <div class="cart__thumb">
                            <a href="product-details.html">
                                <img src="{{ Storage::url($images[0]->image) }}"
                                    alt="" />
                            </a>
                        </div>
                        <div class="cart__details">
                            <h6><a href="product-details.html"> {{$item->product->name}} </a></h6>
                            <div class="cart__price">
                                <span>${{$item->product->price}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart__del">
                        <a href="#"><i class="fal fa-trash-alt"></i></a>
                    </div>
                </div>
                @endforeach
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