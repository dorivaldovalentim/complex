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

    <div id="colorlib-intro">

        <div class="container">

            <div class="row">

                <div class="col-md-12 tabulation animate-box">

                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#plan">
                                <i class="flaticon-sketch"></i>
                                Planning &amp; Design
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#general">
                                <i class="flaticon-architect-with-helmet"></i>
                                General Constructing
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#manage">
                                <i class="flaticon-engineer"></i>
                                Construction Management
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#modeling">
                                <i class="flaticon-skyline"></i>
                                Building Modeling
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div id="plan" class="tab-pane fade in active">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="services-img" style="background-image: url(images/building-1.jpg);"></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services-desc">
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                        <ul>
                                            <li>It is a paradisematic country in which</li>
                                            <li>Even the all-powerful Pointing has no control</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Alphabet Village and the subline of her own road</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div id="general" class="tab-pane fade">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="services-img" style="background-image: url(images/building-2.jpg);"></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services-desc">
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                        <ul>
                                            <li>It is a paradisematic country in which</li>
                                            <li>Even the all-powerful Pointing has no control</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Alphabet Village and the subline of her own road</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                          
                        </div>

                        <div id="manage" class="tab-pane fade">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="services-img" style="background-image: url(images/building-3.jpg);"></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services-desc">
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                        <ul>
                                            <li>It is a paradisematic country in which</li>
                                            <li>Even the all-powerful Pointing has no control</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Alphabet Village and the subline of her own road</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                           
                        </div>

                        <div id="modeling" class="tab-pane fade">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="services-img" style="background-image: url(images/building-4.jpg);"></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services-desc">
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                        <ul>
                                            <li>It is a paradisematic country in which</li>
                                            <li>Even the all-powerful Pointing has no control</li>
                                            <li>When she reached the first hills of the Italic Mountains</li>
                                            <li>Alphabet Village and the subline of her own road</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                       </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <x-services />

    <x-counter-section />

    
    <div id="colorlib-project">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Our Projects</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
            </div>

            <div class="row">
            
                <div class="col-md-4 animate-box">
                    <div class="project-entry">
                        <a href="{{ route('projects') }}" class="project-img text-center" style="background-image: url(images/building-1.jpg);">
                            <span class="icon"><i class="icon-search2"></i></span>
                        </a>

                        <div class="desc">
                            <h3><a href="{{ route('projects') }}">Apartment Interior Design</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 animate-box">
                    <div class="project-entry">
                        <a href="{{ route('projects') }}" class="project-img text-center" style="background-image: url(images/building-2.jpg);">
                            <span class="icon"><i class="icon-search2"></i></span>
                        </a>

                        <div class="desc">
                            <h3><a href="{{ route('projects') }}">Office Space</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 animate-box">
                    <div class="project-entry">
                        <a href="{{ route('projects') }}" class="project-img text-center" style="background-image: url(images/building-3.jpg);">
                            <span class="icon"><i class="icon-search2"></i></span>
                        </a>

                        <div class="desc">
                            <h3><a href="{{ route('projects') }}">Condo Building</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 animate-box">
                    <div class="project-entry">
                        <a href="{{ route('projects') }}" class="project-img text-center" style="background-image: url(images/building-4.jpg);">
                            <span class="icon"><i class="icon-search2"></i></span>
                        </a>

                        <div class="desc">
                            <h3><a href="{{ route('projects') }}">Kitchen Interior</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 animate-box">
                    <div class="project-entry">
                        <a href="{{ route('projects') }}" class="project-img text-center" style="background-image: url(images/building-5.jpg);">
                            <span class="icon"><i class="icon-search2"></i></span>
                        </a>

                        <div class="desc">
                            <h3><a href="{{ route('projects') }}">Commercial Building</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 animate-box">
                    <div class="project-entry">
                        <a href="{{ route('projects') }}" class="project-img text-center" style="background-image: url(images/building-6.jpg);">
                            <span class="icon"><i class="icon-search2"></i></span>
                        </a>

                        <div class="desc">
                            <h3><a href="{{ route('projects') }}">Hotel Building</a></h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection