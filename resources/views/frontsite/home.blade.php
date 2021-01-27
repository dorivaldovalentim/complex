@extends('layouts.frontsite')

@section('title', 'Página inicial')

@section('content')

    <aside id="colorlib-hero">

        <div class="flexslider">

            <ul class="slides">
                
                <li style="background-image: url({{ asset('images/img_bg_4.jpg') }});">
                    <div class="overlay"></div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Our Obsession Is Distinctive interiors</h1>
                                    <h2>Providing all Kinds of Construction Services</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url({{ asset('images/img_bg_2.jpg') }});">
                    <div class="overlay"></div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>High Quality Materials In All Solutions</h1>
                                    <h2>Get your material</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url({{ asset('images/img_bg_3.jpg') }});">
                    <div class="overlay"></div>

                    <div class="container-fluids">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>We Build Buildings Professionally</h1>
                                    <h2>We Design All Kinds of Buildings</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url({{ asset('images/img_bg_1.jpg') }});">
                    <div class="overlay"></div>

                    <div class="container-fluids">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>We Build Your Futures</h1>
                                    <h2>We Design All Kinds of Buildings</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>	
            
            </ul>
        
        </div>

    </aside>

@endsection