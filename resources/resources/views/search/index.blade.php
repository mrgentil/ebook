@extends('layouts.main')

@section('title') @parent Recherche @endsection

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
    <link rel="stylesheet" href="{{ mix('css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <style>
        .noUi-connect {
            background: #fad01e !important;
        }

        #price-slider {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 18px;
            margin-right: 18px;
        }

        @font-face {
            font-family: 'Azonix Regular';
            font-style: normal;
            font-weight: normal;
            src: local('Azonix Regular'), url('fonts/Azonix.woff') format('woff');
        }
    </style>
@endpush
@section('body-class')
    class="woocommerce woocommerce-page"
@endsection
@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="kopa-breadcrumb">

                    <h3>Recherche</h3>

                    <div class="breadcrumb-content">
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                            <a itemprop="url" href="{{ route('home') }}">
                                <span itemprop="title">Accueil</span>
                            </a>
                        </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                            <a itemprop="url" class="current-page">
                                <span itemprop="title">Recherche</span>
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
            <div class="container js-filter">
                @include('flash::message')
                <div class="row">
                    <div class="main-col style-01 col-md-9 col-sm-9 col-xs-9">
                        <div class="woocommerce-main-primary">
                            @if($books->hasMorePages())
                                <header class="woocommerce-main-header js-filter-sorting">
                                    @if($books->hasMorePages())
                                        @include('partials.search.sorting')
                                    @endif
                                </header>
                            @endif

                            <div class="woocommerce-main-content">
                                <ul class="ul-mh row js-filter-content">
                                    @include('partials.search.books')
                                </ul>
                            </div>

                             @if($books->hasMorePages())
                            <footer class="woocommerce-main-footer js-filter-pagination">
                                @if($books->hasMorePages())
                                    @include('partials.search.pagination')
                                @endif
                            </footer>
                            @endif
                        </div>
                        <!-- woocommerce-main-primary -->

                    </div>
                    <!-- col-md-9 -->

                    <div class="sidebar style-01 col-md-3 col-sm-3 col-xs-3">
                        @include('partials.search.filter')
                    </div>
                    <!-- col-md-3 -->

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
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ mix('js/filter-slider.js') }}"></script>
@endpush
