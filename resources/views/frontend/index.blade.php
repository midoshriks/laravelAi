@extends('layouts.frontend.app')

@section('content')
    {{-- auth  --}}
    <div id="modal" class="popupContainer" style="display:none;">
        <div class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </div>

        <section class="popupBody">
            <!-- Social Login -->
            @include('frontend.auth.social_login')


            <!-- Username & Password Login form -->
            @include('frontend.auth.user_login')

            <!-- Register Form -->
            @include('frontend.auth.user_register')
        </section>
    </div>

    <div class="main-banner wow fadeIn" id="{{ $pages[0]->name }}" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Get The Latest App From App Stores</h2>
                                        <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS
                                            layout provided by TemplateMo, a great website to download free CSS templates.
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                                        </div>
                                        <div class="white-button scroll-to-section">
                                            <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('frontend/landing/assets/images/slider-dec.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="{{ $pages[1]->name }}" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                        <img src="{{ asset('frontend/landing/assets/images/heading-line-dec.png') }}" alt="">
                        <p>If you need the greatest collection of HTML templates for your business, please visit <a
                                rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you
                            need
                            to have a contact form PHP script, go to <a href="https://templatemo.com/contact"
                                target="_parent">our contact page</a> for more information.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>App Maintenance</h4>
                        <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Rocket Speed of App</h4>
                        <p>You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this
                            layout.
                        </p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>Multi Workflow Idea</h4>
                        <p>If this template is beneficial for your work, please support us <a rel="nofollow"
                                href="https://paypal.me/templatemo" target="_blank">a little via PayPal</a>. Thank
                            you.
                        </p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>24/7 Help &amp; Support</h4>
                        <p>Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and
                            fashion
                            axe.</p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="{{ $pages[2]->name }}" class="about-us section">
        @include('frontend.about')
    </div>

    <div id="clients" class="the-clients">
        @include('frontend.clients')
    </div>

    <div id="{{ $pages[3]->name }}" class="pricing-tables">
        @include('frontend.pricing')
    </div>

@endsection
