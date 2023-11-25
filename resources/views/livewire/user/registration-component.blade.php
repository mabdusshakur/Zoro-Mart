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
                        <h3 class="text-center mb-60">Signup From Here</h3>
                        <form wire:submit.prevent="register">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">First Name <span>**</span></label>
                                    <input id="name" type="text"
                                        class="form-control @error('user_first_name') is-invalid @enderror"
                                        placeholder="Enter Username" wire:model='user_first_name' />
                                    @error('user_first_name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="name">Last Name <span>**</span></label>
                                    <input id="name" type="text"
                                        class="form-control @error('user_last_name') is-invalid @enderror"
                                        placeholder="Enter Username" wire:model='user_last_name' />
                                    @error('user_last_name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <label for="email">Email Address <span>**</span></label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Email address"
                                wire:model='email' />
                            @error('email')
                                <span class="invalid-feedback"> {{ $message }}</span>
                            @enderror

                            <label for="password">Password <span>**</span></label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Enter password" wire:model='password' />
                            @error('password')
                                <span class="invalid-feedback"> {{ $message }}</span>
                            @enderror

                            <label for="c_password">Confirm Password <span>**</span></label>
                            <input id="c_password" type="password"
                                class="form-control @error('c_password') is-invalid @enderror"
                                placeholder="Confirm Password" wire:model='c_password' />
                            @error('c_password')
                                <span class="invalid-feedback"> {{ $message }}</span>
                            @enderror

                            <div class="mt-10"></div>
                            <button type="submit" class="t-y-btn w-100">Register Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="{{ route('user.login') }}" class="t-y-btn t-y-btn-grey w-100">login Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- footer area start -->
        @include('layouts.user.partials._footer')
        <!-- footer area end -->
    
</div>
