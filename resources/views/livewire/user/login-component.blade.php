<div>
    <main>

        <!-- breadcrumb area start -->
        @section('current-page-name', 'Login')
        @include('partials.user._bread_crumb')
        <!-- breadcrumb area end -->
        @include('partials.user._alerts')
        <section class="login-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                            <h3 class="text-center mb-60">Login From Here</h3>
                            <form wire:submit.prevent='login'>
                                <label for="email">Email Address <span>**</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address"
                                    wire:model='email' />
                                @error('email') <span class="invalid-feedback"> {{ $message }}</span> @enderror

                                <label for="password">Password <span>**</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password"
                                    wire:model='password' />
                                @error('password') <span class="invalid-feedback"> {{ $message }}</span> @enderror

                                <div class="login-action mb-20 fix">
                                    <span class="log-rem f-left">
                                        <input id="remember" type="checkbox" wire:model="remember" />
                                        <label for="remember">Remember me!</label>
                                    </span>
                                    <span class="forgot-login f-right">
                                        <a href="#">Lost your password?</a>
                                    </span>
                                </div>
                                <button type="submit" class="t-y-btn w-100">Login Now</button>
                                <div class="or-divide"><span>or</span></div>
                                <a href="register.html" class="t-y-btn t-y-btn-grey w-100">Register Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
