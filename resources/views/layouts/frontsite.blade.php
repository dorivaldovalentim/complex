<!DOCTYPE html>
<html lang="pt_AO">

    <head>
        <title>Complex » @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        {{-- Animate.css --}}
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        {{-- Icomoon Icon Fonts--}}
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">

        {{-- Bootstrap  --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        {{-- Magnific Popup --}}
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        {{-- Flexslider  --}}
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

        {{-- Owl Carousel --}}
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        
        {{-- Flaticons  --}}
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

        {{-- Theme style  --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- Modernizr JS --}}
        <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    </head>

    <body>

        <div class="colorlib-loader"></div>

        <div id="page">
            <x-main-menu />

            @yield('content')

            {{-- Newsletter Section --}}

            <div id="colorlib-subscribe">

                <div class="overlay"></div>

                <div class="container">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Subscribe Newsletter</h2>
                            <p>Subscribe our newsletter and get latest update</p>
                        </div>
                    </div>

                    <div class="row animate-box">

                        <div class="col-md-6 col-md-offset-3">

                            <div class="row">

                                <div class="col-md-12">
                                    <form class="form-inline qbstp-header-subscribe">
                                        <div class="col-three-forth">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                            </div>
                                        </div>

                                        <div class="col-one-third">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            {{-- End Newsletter Section --}}


            {{-- Footer Section --}}

            <footer id="colorlib-footer">

                <div class="contact-information">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-8 col-md-offset-2">

                                <div class="row">

                                    <div class="col-md-4 text-center">
                                        <div class="info-wrap">
                                            <span class="icon"><i class="icon-location4"></i></span>
                                            <p>291 South 21th Street, <br> Suite 721 New York NY 10016</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="info-wrap">
                                            <span class="icon"><i class="icon-world"></i></span>
                                            <p><a href="#">info@example.com</a> <br> <a href="#">www.example.com</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="info-wrap">
                                            <span class="icon"><i class="icon-phone2"></i></span>
                                            <p><a href="#">(001) 2345 6789</a> <br> <a href="#">(001) 9876 5432</a></p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="container">

                    <div class="row row-pb-md">

                        <div class="col-md-3 colorlib-widget">
                            <h4>About Complex</h4>

                            <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>

                            <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-md-3 col-md-push-1 colorlib-widget">
                            <h4>Information</h4>

                            <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#"><i class="icon-check"></i> Our Company</a></li>
                                    <li><a href="#"><i class="icon-check"></i> Certification</a></li>
                                    <li><a href="#"><i class="icon-check"></i> Our services</a></li>
                                    <li><a href="#"><i class="icon-check"></i> Career</a></li>
                                    <li><a href="#"><i class="icon-check"></i> Core Values</a></li>
                                    <li><a href="#"><i class="icon-check"></i> Company History</a></li>
                                    <li><a href="#"><i class="icon-check"></i> FAQ</a></li>
                                </ul>
                            </p>
                        </div>
    
                        <div class="col-md-3 colorlib-widget">
                            <h4>Instagram</h4>

                            <div class="instagram">
                                <a href="#" class="insta-img" style="background-image: url(images/building-1.jpg);"></a>
                                <a href="#" class="insta-img" style="background-image: url(images/building-2.jpg);"></a>
                                <a href="#" class="insta-img" style="background-image: url(images/building-3.jpg);"></a>
                                <a href="#" class="insta-img" style="background-image: url(images/building-4.jpg);"></a>
                                <a href="#" class="insta-img" style="background-image: url(images/building-5.jpg);"></a>
                                <a href="#" class="insta-img" style="background-image: url(images/building-6.jpg);"></a>
                            </div>
                        </div>
    
                        <div class="col-md-3 col-md-push-1 colorlib-widget">
                            <h4>Contact Info</h4>

                            <ul class="colorlib-footer-links">
                                <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                                <li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
                                <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
                                <li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="copy">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p>
                                    <small class="block">
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </footer>

            {{-- End Footer Section --}}

        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>
	
        {{-- jQuery --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        {{-- jQuery Easing --}}
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>

        {{-- Bootstrap --}}
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        {{-- Waypoints --}}
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>

        {{-- Stellar Parallax --}}
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

        {{-- Flexslider --}}
        <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>

        {{-- Owl carousel --}}
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        {{-- Magnific Popup --}}
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup-options.js') }}"></script>

        {{-- Counters --}}
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>

        {{-- Main --}}
        <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>