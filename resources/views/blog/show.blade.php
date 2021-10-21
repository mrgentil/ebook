@extends('layouts.main')

@section('title') @parent {{ $post->title }} @endsection

@section('description')
    {{ $post->excerpt }}
@endsection

@section('meta-image')
    {{ $post->image }}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/megafish.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.navgoco.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/woocommerce.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
@endpush

@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="kopa-breadcrumb">

                    <h3>{{ $post->title }}</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">{{ $post->title }}</span>
                                </a>
                            </span>
                    </div>

                </div>
                <!-- kopa-breadcrumb -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-16 -->

        <section class="kopa-area kopa-area-20">

            <div class="container">

                <div class="row">

                    <div class="main-col col-md-8 col-sm-8 col-xs-8">

                        <div class="single-entry-item">

                            <section>
                                <article class="entry-item">

                                    <div class="entry-thumb">
                                        <img src="{{ $post->image }}" alt="{{ $post->title }}">
                                    </div>

                                    <div class="entry-content">
                                        <a href="#" class="kopa-btn-7">
                                            {{ $post->created_at }}
                                        </a>
                                        {!! $post->body !!}

                                    </div>

                                </article>
                            </section>

                            <div class="reading-module-social-2">
                                <ul class="ul-mh clearfix">
                                    <li class="style-01">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                            <p>4.1 m</p>
                                            <span>fans</span>
                                        </a>
                                    </li>
                                    <li class="style-02">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                            <p>178</p>
                                            <span>followers</span>
                                        </a>
                                    </li>
                                    <li class="style-03">
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                            <p>884.0 K</p>
                                            <span>followers</span>
                                        </a>
                                    </li>
                                    <li class="style-04">
                                        <a href="#">
                                            <i class="fa fa-vimeo"></i>
                                            <p>232</p>
                                            <span>Subscribers</span>
                                        </a>
                                    </li>
                                    <li class="style-05">
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                            <p>331.7 K</p>
                                            <span>Subscribers</span>
                                        </a>
                                    </li>
                                    <li class="style-06">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                            <p>7.4 K</p>
                                            <span>Shares</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- social -->
                            <div class="single-post-author">
                                <div class="author-avatar kopa-pull-left">
                                    <a href="#">
                                        <img src="{{ $post->user->avatar  }}" alt="{{ $post->user->name }}">
                                    </a>
                                </div>
                                <div class="author-content-wrap">
                                    <header class="clearfix">
                                        <div class="kopa-pull-right">
                                            <div class="kopa-social-links style-03">
                                                <ul class="clearfix">
                                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                                    <li><a href="#" class="fa fa-rss"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="kopa-pull-left">
                                            <h5>
                                                <a href="#">{{ $post->user->name }}</a>
                                                <a href="#">Admin</a>
                                            </h5>
                                        </div>
                                    </header>
                                    <div class="author-content">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ninvento veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- author -->

                            <div class="single-other-post">
                                <ul class="row ul-mh">
                                    <li class="col-sm-6">
                                        @if(!empty($previous))
                                        <a href="{{ $previous->slug_link }}" class=""><i class="fa fa-long-arrow-left"></i>Article Précédent</a>
                                        @endif
                                    </li>
                                    <li class="col-sm-6">
                                        @if(!empty($next))
                                        <a href="{{ $next->slug_link }}" class="">Article suivant<i class="fa fa-long-arrow-right"></i></a>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <!-- single-other-post -->

                            <div class="single-related-post">
                                <h3 class="widget-title style-02">
                                    billets<span>de la même catégorie</span>
                                </h3>
                                <div class="row">

                                    <div class="owl-carousel owl-carousel-5">
                                        @foreach ($related_posts as $related_post)
                                        <div class="item">
                                            <article class="entry-item">
                                                <div class="entry-thumb">
                                                    <a href="#"><img src="{{ $related_post->image }}" alt="{{ $related_post->title }}"></a>
                                                    <div class="ct-mask">
                                                        <a href="{{ $related_post->slug_link }}" class="ct-icon"></a>
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <a href="#" class="kopa-btn-7">
                                                        {{ $related_post->created_at }}
                                                    </a>
                                                    <h4 class="entry-title"><a href="#">{{ $related_post->title }}</a></h4>
                                                    <p>{{ str_limit($related_post->excerpt, 100) }}</p>
                                                    <footer class="clearfix">
                                                        <div class="kopa-pull-left">
                                                            <a href="{{ $related_post->slug_link }}" class="more-link">Lire plus</a>
                                                        </div>
                                                        <div class="kopa-pull-right">
                                                            <ul class="clearfix">

                                                                <li>
                                                                    <a href="#" class="ct-icon-3">
                                                                        <i class="fa fa-comments"></i>
                                                                        <span class="ct-icon-4">{{ count($related_post->comments) }}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </footer>
                                                </div>
                                            </article>
                                        </div>
                                        @endforeach
                                        <!-- item -->
                                    </div>
                                    <!-- owl-carousel-5 -->

                                </div>
                                <!-- row -->
                            </div>
                            <!-- single-related-post -->

                            @comments([
                            'model' => $post,
                            'approved' => true
                            ])

                            <!-- single-comment-list -->
                        </div>

                    </div>
                    <!-- col-md-8 -->

                    @include('partials.blog.sidebar')
                    <!-- col-md-4 -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-18 -->

    </div>
    <!-- main-content -->
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.navgoco.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sliderPro.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
