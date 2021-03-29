@extends('layouts.frontsite')

@section('title', 'Serviços')

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
                                    <h1>Serviços</h1>
                                    <h2>
                                        <a href="{{ route('home') }}">Complex</a>
                                        » Serviços
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>

        </div>

    </aside>

    <x-services />

@endsection