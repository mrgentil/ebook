@extends('layouts.main')

@section('title') @parent Nous contacter @endsection

@section('description')
    {{ $page->meta_description }}
@endsection

@section('keywords')
    {{ $page->meta_keywords }}
@endsection

@section('meta-image')
    {{ Voyager::image($page->image) }}
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
@endpush
@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-1">
                <span></span>
            </div>

            <div class="container">
                <div class="kopa-breadcrumb">

                    <h3>Nous Contacter</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">nous contacter</span>
                                </a>
                            </span>
                    </div>

                </div>
                <!-- kopa-breadcrumb -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-16 -->

        <section class="kopa-area kopa-area-18">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget readin-module-contact-1">
                            <div class="widget-content text-center">

                                <ul class="ul-mh row">

                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                        <article class="entry-item">
                                            <div class="ct-icon-6">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="entry-content">
                                                <h3>address</h3>
                                                <p>121 King Street, Melbourne <br>Victoria 3000 Australia</p>
                                            </div>
                                        </article>
                                    </li>

                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                        <article class="entry-item">
                                            <div class="ct-icon-6 style-01">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="entry-content">
                                                <h3>phone</h3>
                                                <p>+61 3 8376 6284</p>
                                                <p>+61 3 8376 6285</p>
                                            </div>
                                        </article>
                                    </li>

                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                        <article class="entry-item">
                                            <div class="ct-icon-6 style-02">
                                                <i class="fa fa-print"></i>
                                            </div>
                                            <div class="entry-content">
                                                <h3>fax</h3>
                                                <p>+61 3 8376 1234</p>
                                                <p>+61 3 8376 5678</p>
                                            </div>
                                        </article>
                                    </li>

                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                        <article class="entry-item">
                                            <div class="ct-icon-6 style-03">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="entry-content">
                                                <h3>email</h3>
                                                <p><a href="mailto:info@envato.com">info@envato.com</a></p>
                                                <p><a href="mailto:Support@envato.com">Support@envato.com</a></p>
                                            </div>
                                        </article>
                                    </li>

                                </ul>

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

        <section class="kopa-area kopa-area-17">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget">
                            <header class="widget-header style-01">
                                <h3 class="widget-title style-02">
                                    fill<span>free</span>
                                </h3>
                                <p>Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum <br>est. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...</p>
                            </header>
                            <div class="widget-content">
                                @include('flash::message')
                                <div class="ct-form-box">
                                    <div id="respond" class="comment-respond">
                                        <form class="ct-form-1" action="{{ route('contact.store') }}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="row">

                                                <div class="col-md-6 col-sm-6 col-xs-6">

                                                    <p class="input-block">
                                                        <input type="text" value="{{ old('name') }}" placeholder="Nom" name="name" class="valid">
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </p>
                                                    <p class="input-block">
                                                        <input type="text"  value="{{ old('email') }}" placeholder="Email" name="email" class="valid">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </p>
                                                    <p class="input-block">
                                                        <input type="tel"  value="{{ old('phone') }}" placeholder="Téléphone" name="phone" class="valid">
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </p>
                                                    <p class="input-block">
                                                        <input type="tel"  value="{{ old('subject') }}" placeholder="Sujet" name="subject" class="valid">
                                                        @error('subject')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </p>

                                                </div>
                                                <!-- col-md-6 -->

                                                <div class="col-md-6 col-sm-6 col-xs-6">

                                                    <p class="textarea-block">
                                                        <textarea name="message" placeholder="Message" cols="88" rows="11">{{ old('message') }}</textarea>
                                                        @error('message')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>

                                                </div>
                                                <!-- col-md-6 -->

                                            </div>
                                            <!-- row -->

                                            <p class="input-block btn-block clearfix text-center">
                                                <input type="submit" value="Soumettre" class="ct-submit-1">
                                            </p>

                                        </form>

                                        <div id="response-1"></div>
                                    </div>
                                </div>
                                <!-- form-box -->

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
        <!-- kopa-area-17 -->

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
