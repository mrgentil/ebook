@extends('layouts.main')

@section('title') @parent Mes favoris @endsection

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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
     <style>
        @font-face {
            font-family: 'Azonix Regular';
            font-style: normal;
            font-weight: normal;
            src: local('Azonix Regular'), url('fonts/Azonix.woff') format('woff');
        }
    </style>
@endpush
@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="kopa-breadcrumb">

                    <h3>Dans mes favoris</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">Dans mes favoris</span>
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
                @include('flash::message')
                <div class="row">
                    <div class="sidebar style-01 col-md-3 col-sm-3 col-xs-12">
                        <div class="widget widget_categories">
                            @include('partials.account.sidebar')
                        </div>
                        <!-- widget -->
                    </div>
                    <div class="main-col col-md-9 col-sm-9 col-xs-12">

                        <div class="widget ct-widget-2">
                            <div class="widget-content">
                                <div class="widget-content-area-2" style="margin-top: 0;">
                                    <ul class="ct-ul-5 row ul-mh">
                                        @foreach($favorites as $favorite)
                                            <li class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                            <article class="entry-item ct-item-5 style-04">
                                                <div class="entry-thumb">
                                                    <a href="{{ $favorite->slug_link }}">
                                                        <img src="{{ $favorite->file }}" alt="{{ $favorite->title }}">
                                                    </a>

                                                    <div class="entry-content">
                                                        <header>
                                                            <h4 class="entry-title">
                                                                <a href="{{ $favorite->slug_link }}">{{ $favorite->title }}</a>
                                                                <span style="display:block;font-size: 14px;font-family:'Azonix Regular';color:#FAD01E"><i class="fa fa-user"></i>
                                                                    {{ $favorite->author_name ? $favorite->author_name : $favorite->user->name }}
                                                                </span>
                                                            </h4>
                                                        
                                                        </header>
                                                        <p>{{ str_limit($favorite->description, 100) }}</p>
                                                        <p class="ct-space-1"></p>
                                                    </div>
                                                </div>
                                                <footer>
                                                    <a href="{{ $favorite->slug_link }}" class="kopa-btn-6">voir</a>
                                                </footer>
                                            </article>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-12 -->

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
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
