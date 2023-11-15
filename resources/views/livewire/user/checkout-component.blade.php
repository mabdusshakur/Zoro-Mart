<div>
    @include('partials.user._inlcudes')
    <!-- breadcrumb area start -->
    @section('current-page-name', 'Checkout')
    @include('partials.user._bread_crumb')
    <!-- breadcrumb area end -->

    <!-- coupon-area start -->
    <section class="coupon-area pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed
                                    est
                                    sit amet ipsum luctus.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row">
                                        <button class="t-y-btn t-y-btn-grey" type="submit">Login</button>
                                        <label>
                                            <input type="checkbox" />
                                            Remember me
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input type="text" placeholder="Coupon Code" />
                                        <button class="t-y-btn t-y-btn-grey" type="submit">Apply Coupon</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coupon-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-70">
        <div class="container">
            <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select wire:model="country">
                                            <option>Select Country</option>
                                            @foreach ($countryList as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" wire:model="first_name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" wire:model="last_name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" wire:model="address_1" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)"
                                            wire:model="address_2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City" wire:model="city" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" wire:model="zipcode" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" wire:model="email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Phone" wire:model="phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10"
                                        placeholder="Notes about your order, e.g. special notes for delivery." wire:model="notes"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order mb-30 ">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sub_total_price = 0;
                                        @endphp
                                        @foreach ($cartItems as $item)
                                            @php
                                                $sub_total_price += $item->product->price;
                                            @endphp
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $item->product->name }} <strong class="product-quantity"> ×
                                                        {{ $item->quantity }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span
                                                        class="amount">${{ number_format($item->product->price * $item->quantity, 2) }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">${{ number_format($sub_total_price , 2)}}</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">${{ number_format($sub_total_price , 2)}}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method">
                                <div class="accordion" id="checkoutAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="checkoutOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bankOne" aria-expanded="true"
                                                aria-controls="bankOne">
                                                Direct Bank Transfer
                                            </button>
                                        </h2>
                                        <div id="bankOne" class="accordion-collapse collapse show"
                                            aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Make your payment directly into our bank account. Please use your Order
                                                ID as the payment reference. Your order won’t be shipped until the funds
                                                have cleared in our account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paymentTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#payment"
                                                aria-expanded="false" aria-controls="payment">
                                                Cheque Payment
                                            </button>
                                        </h2>
                                        <div id="payment" class="accordion-collapse collapse"
                                            aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Please send your cheque to Store Name, Store Street, Store Town, Store
                                                State / County, Store
                                                Postcode.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paypalThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#paypal"
                                                aria-expanded="false" aria-controls="paypal">
                                                PayPal
                                            </button>
                                        </h2>
                                        <div id="paypal" class="accordion-collapse collapse"
                                            aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="t-y-btn t-y-btn-grey">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
