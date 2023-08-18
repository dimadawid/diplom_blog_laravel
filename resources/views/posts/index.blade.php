@extends('layouts.layout')

@section('title', 'Dimadawid - Blog Template :: Home')

@section('header')

    <section id="cta" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <h2>Добро пожаловать на наш блог!</h2>
                    <p class="lead">Наша цель - делиться интересными и полезными знаниями с нашими читателями. Мы стремимся развить вашу экспертность в области криптовалюты и финансов, чтобы вы могли принимать обоснованные итоги и принимать важные решения в этой быстро меняющейся сфере.</p>
                    <!--<a href="#" class="btn btn-primary">Try for free</a>-->
                </div>
              <!--  <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <h3>Subscribe Today!</h3>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <form class="form-inline" method="post">
                            <input type="text" name="email" placeholder="Add your email here.." required
                                   class="form-control"/>
                            <input type="submit" value="Subscribe" class="btn btn-default btn-block"/>
                        </form>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="page-wrapper">
        <div class="blog-custom-build">

            @foreach($posts as $post)
                <div class="blog-box wow fadeIn">
                    <div class="post-media">
                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">
                            <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div>
                            <!-- end hover -->
                        </a>
                    </div>
                    <!-- end media -->
                    <div class="blog-meta big-meta text-center">
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span
                                            class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span
                                            class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div><!-- end post-sharing -->

                        <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">{{ $post->title }}</a></h4>
                        {!! $post->description !!}
                        <small><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>
                        <small>{{ $post->getPostDate() }}</small>
                        <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">
            @endforeach

        </div>
    </div>

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                {{ $posts->links() }}
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->

@endsection
