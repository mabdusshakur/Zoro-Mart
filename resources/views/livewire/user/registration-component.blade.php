<div>
    <main>

        <!-- breadcrumb area start -->
        @section('current-page-name', 'Register')
        @include('partials.user._bread_crumb')
        <!-- breadcrumb area end -->

        <section class="login-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                            <h3 class="text-center mb-60">Signup From Here</h3>
                            <form wire:submit.prevent="register">
                                <label for="name">Name <span>**</span></label>
                                <input id="name" type="text" placeholder="Enter Username" wire:model='user_name'/>

                                <label for="email">Email Address <span>**</span></label>
                                <input id="email" type="email" placeholder="Email address..." wire:model='email'/>

                                <label for="password">Password <span>**</span></label>
                                <input id="password" type="password" placeholder="Enter password..." wire:model='password'/>

                                <div class="mt-10"></div>
                                <button type="submit" class="t-y-btn w-100">Register Now</button>
                                <div class="or-divide"><span>or</span></div>
                                <a href="login.html" class="t-y-btn t-y-btn-grey w-100">login Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
