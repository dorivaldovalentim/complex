@extends('layouts.frontsite')

@section('title', 'Blog')

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
                                    <h1>Blog</h1>
                                    <h2>
                                        <a href="{{ route('home') }}">Complex</a>
                                        » Blog
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>

        </div>

    </aside>

    <div id="colorlib-blog">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <article class="animate-box">
                        <a href="#" class="blog-img text-center" style="background-image: url(images/blog-1.jpg);">
                            <span class="icon">
                                <i class="icon-search2"></i>
                            </span>
                        </a>

                        <div class="entry">
                            <h2><a href="#">Construction was awarded with “The Best Construction Company” prize</a></h2>
                            <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6">

                    <article class="animate-box">
                        <a href="#" class="blog-img text-center" style="background-image: url(images/blog-2.jpg);">
                            <span class="icon">
                                <i class="icon-search2"></i>
                            </span>
                        </a>

                        <div class="entry">
                            <h2><a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a></h2>
                            <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </article>

                </div>

            </div>
            	
        </div>

    </div>

@endsection