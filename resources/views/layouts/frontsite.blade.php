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