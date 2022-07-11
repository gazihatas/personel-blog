@extends('front.layouts.master')
@section('title','Ana Sayfa')
@section('bg','https://c0.wallpaperflare.com/preview/1013/721/141/contact-details-smartphone-business-contact-us.jpg')
@section('content')

    <!-- ABOUT -->
    <section class="about  d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio and blog website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hey folks, I'm</span>
                            <div class="animated-info">
                                <span class="animated-item">{{$author->name}}</span>
                                <span class="animated-item">{{$author->pozisyon}}</span>
                            </div>
                        </h1>

                        <p>
                            {{$author->hakkimda}}
                            <br>
                            Tech Stack: <mark>{{$author->yetenek}}</mark>

                        </p>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <!--================Blog Area =================-->
    <section class="blog_area p_120">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @include('front.widgets.blogListesi')
                    </div>
                </div>

               @include('front.widgets.letfBarWidgetsManager')



            </div>
        </div>
    </section>
    <!--================Blog Area =================-->



@endsection
