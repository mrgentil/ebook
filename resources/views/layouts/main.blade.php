<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <title>@section('title')Congobook - @show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@section ('keywords')ZamengApp @show"/>

    <meta name="language" content="fr"/>
    <meta name="copyright" content="//umoja.com"/>
    <meta name="author" content="Guerth Manzala"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#78AB4E"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:site_name" content="{{ setting('site.title') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:language" content="{{ app()->getLocale() }}"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show"/>

    <!-- Schema.org meta pour Google+ -->
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">

    <!-- Card meta pour Twitter -->
    <meta name="twitter:card" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">
    <meta name="twitter:site" content="@UmojaTechnology">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <!-- Twitter summary card avec image large de 280x150px -->
    <meta name="twitter:image:src" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">

    @stack('css')
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('img/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/icons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icons/apple-touch-icon-114x114.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body @yield('body-class')>
<div class="main-container" id="app">

    @include('partials.main-header')

    @yield('content')

    <section class="kopa-area kopa-area-17">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="widget reading-module-carousel-2">
                    <header class="widget-header">
                        <h3 class="widget-title style-02">
                            Nos<span>Partenaires</span>
                        </h3>
                        <p>Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum <br>est. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...</p>
                    </header>
                    <div class="widget-content">
                        <div class="row">
                            <div class="owl-carousel owl-carousel-2">
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/01.png') }}" width="100" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/02.png') }}" width="100" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/03.png') }}" width="100" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/04.jpg') }}" width="100" alt=""></a>
                                </div>
                            </div>
                            <!-- owl-carousel-1 -->
                        </div>
                        <!-- row -->
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
    @include('partials.footer')

    <a href="#" class="scroll-up" style="bottom: 106px;"><span class="ti-arrow-up"></span></a>

</div>
<!-- main-container -->
<div class="body-overlay"></div>
<div class="body-background"></div>
@include('partials.slide-area')
<!-- slide-area -->
@stack('scripts')
</body>
</html>
