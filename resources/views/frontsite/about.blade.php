@extends('layouts.frontsite')

@section('title', 'Sobre')

@section('content')

    <aside id="colorlib-hero">

        <div class="flexslider">

            <ul class="slides">

                <li style="background-image: url(images/cover_img_3.jpg);">

                    <div class="overlay"></div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Sobre</h1>
                                    <h2>
                                        <a href="{{ route('home') }}">Complex</a>
                                        » Sobre
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>

        </div>

    </aside>

    <div id="colorlib-about">

        <div class="container">

            <div class="row row-pb-lg">

                <div class="col-md-6 animate-box">
                    <div class="about-desc">
                        <h3>About Complex</h3>
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>

                <div class="col-md-6 animate-box">
                    
                    <x-caracteristics />

                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Our Team</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 animate-box">
                    <a href="#" class="staff-img staff-img2" style="background-image: url(images/person1.jpg);">
                        <div class="desc-staff">
                            <h3>Ian Moore</h3>
                            <span>Electrician</span>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-3 animate-box">
                    <a href="#" class="staff-img staff-img2" style="background-image: url(images/person2.jpg);">
                        <div class="desc-staff">
                            <h3>Jack Clark</h3>
                            <span>Engineer</span>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-3 animate-box">
                    <a href="#" class="staff-img staff-img2" style="background-image: url(images/person3.jpg);">
                        <div class="desc-staff">
                            <h3>Kiven Lewis</h3>
                            <span>Architect</span>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-3 animate-box">
                    <a href="#" class="staff-img staff-img2" style="background-image: url(images/person4.jpg);">
                        <div class="desc-staff">
                            <h3>Charles Scott</h3>
                            <span>Assistant Engineer</span>
                        </div>
                    </a>
                </div>
            
            </div>
        
        </div>
    
    </div>

@endsection