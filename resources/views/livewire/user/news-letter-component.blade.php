<div>
    <section class="subscribe__area pt-35 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="subscribe__content d-sm-flex align-items-center">
                        <div class="subscribe__icon mr-25">
                            <img src="{{ asset('user/assets/img/icon/icon_email.png') }}" alt="" />
                        </div>
                        <div class="subscribe__text">
                            <h4>Sign up to Newsletter</h4>
                            <p>Get email updates about our latest shop...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="subscribe__form f-right">
                        <form wire:submit.prevent="subscribeNewsLetter">
                            <input type="email" placeholder="Enter your email here..." wire:model="email"/>
                            <button class="t-y-btn t-y-btn-sub" type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
