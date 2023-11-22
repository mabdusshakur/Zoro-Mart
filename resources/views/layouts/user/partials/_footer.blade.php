<footer>
    <div class="footer__area">
        <div class="footer__top black-bg pt-80 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="footer__widget">
                                    <div class="footer__widget-title footer__widget-title-2">
                                        <h4>Company Info</h4>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__link footer__link-2">
                                            <ul>
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">Contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="footer__widget">
                            <div class="footer__widget-title footer__widget-title-2">
                                <h4>Social Media</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__social mb-20">
                                    <ul>
                                        <li class="fb"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="tw"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="gp"><a href="#"><i
                                                    class="fab fa-google-plus-g"></i></a></li>
                                        <li class="yt"><a href="#"><i
                                                    class="fab fa-youtube"></i></a></li>
                                        <li class="pt"><a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                        <li class="em"><a href="#"><i
                                                    class="fal fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="footer__download">
                                    <h4>Download The App - Get 30% Sale Coupon</h4>
                                    <a href="#" class="m-img"><img
                                            src="{{ asset('user/assets/img/icon/app-store-2.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright pb-35 black-bg ">
            <div class="container">
                <div class="footer__copyright-inner pt-30">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer__copyright-text">
                                <p>Copyright © <a href="{{route('user.home')}}">{{ env('APP_NAME') }}.</a></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer__payment f-right">
                                <a href="#" class="m-img"><img
                                        src="{{ asset('user/assets/img/icon/payment.png') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>