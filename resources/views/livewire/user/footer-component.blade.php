<div>
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
                                                    <li><a href="{{ route('user.about') }}">About us</a></li>
                                                    <li><a href="{{ route('user.contact') }}">Contact us</a></li>
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
                                            @if (isset($socialmedias))
                                                @foreach ($socialmedias as $socialmedia)
                                                    <li><a target="_blank" href="{{ $socialmedia->link }}"><i
                                                                class="{{ $socialmedia->icon }}"></i></a></li>
                                                @endforeach
                                            @endif
                                        </ul>
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
                                    <p>Copyright © <a href="{{ route('user.home') }}">{{ $web_name ?? config('app.name') }}</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__payment f-right">
                                    <a href="#" class="m-img"><img
                                            src="{{ asset('user/assets/img/icon/payment.png') }}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</div>
