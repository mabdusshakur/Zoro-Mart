<div>
    <div>
        <!-- breadcrumb area start -->
        @section('current-page-name', 'Register')
        @include('partials.user._bread_crumb')
        <!-- breadcrumb area end -->
        @include('partials.user._alerts')
        <section class="login-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                            <form wire:submit.prevent="saveProfile">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="first_name">First Name <span>**</span></label>
                                        <input id="first_name" type="text"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            placeholder="Enter First Name" wire:model='first_name' />
                                        @error('first_name')
                                            <span class="invalid-feedback"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="last_name">Last Name <span>**</span></label>
                                        <input id="last_name" type="text"
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            placeholder="Enter Last Name" wire:model='last_name' />
                                        @error('last_name')
                                            <span class="invalid-feedback"> {{ $message }}</span>
                                        @enderror
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
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Phone" wire:model="phone" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10"></div>
                                <button type="submit" class="t-y-btn w-100">Save Info</button>
                            </form>

                            <form wire:submit.prevent="updatePassword">
                                <div class="row mt-4">
                                    <label for="current_password">Current Password <span>**</span></label>
                                    <input id="current_password" type="password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        placeholder="Enter Current password" wire:model='current_password' />
                                    @error('current_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror

                                    <label for="new_password">New Password <span>**</span></label>
                                    <input id="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        placeholder="Enter New password" wire:model='new_password' />
                                    @error('new_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror

                                    <label for="c_password">Confirm Password <span>**</span></label>
                                    <input id="c_password" type="password"
                                        class="form-control @error('c_password') is-invalid @enderror"
                                        placeholder="Confirm Password" wire:model='c_password' />
                                    @error('c_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-10"></div>
                                <button type="submit" class="t-y-btn w-100">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
