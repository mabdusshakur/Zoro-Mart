<div>
    <main>

        <!-- breadcrumb area start -->
        @section('current-page-name', 'Login')
        @include('partials.user._bread_crumb')
        <!-- breadcrumb area end -->

        <section class="login-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                            <h3 class="text-center mb-60">Login From Here</h3>
                            <form wire:submit.prevent='login'>
                                <label for="email">Email Address <span>**</span></label>
                                <input id="email" type="text" placeholder="Email address..." wire:model='email'/>
                                <label for="pass">Password <span>**</span></label>
                                <input id="pass" type="password" placeholder="Enter password..." wire:model='password'/>
                                <div class="login-action mb-20 fix">
                                    <span class="log-rem f-left">
                                        <input id="remember" type="checkbox" />
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
