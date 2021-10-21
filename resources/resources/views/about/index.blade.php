@extends('layouts.main')

@section('description')
    {{ $page->meta_description }}
@endsection

@section('keywords')
    {{ $page->meta_keywords }}
@endsection

@section('meta-image')
    {{ Voyager::image($page->image) }}
@endsection

@section('title') @parent A propos de nous @endsection

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
    <style>
        li.modded .entry-item {
            max-height: 480px;
            min-height: 480px;
        }
    </style>
@endpush
@section('content')
    <div id="main-content">
        <section class="kopa-area kopa-area-16 kopa-area-parallax white-text-style">
            <div class="kopa-area-tg-1">
                <span></span>
            </div>
            <div class="container">
                <div class="kopa-breadcrumb">
                    <h3>A Propos De Nous</h3>
                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">A propos de nous</span>
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
                <div class="widget reading-module-intro-5">
                    <header class="widget-header style-01">
                        <h3 class="widget-title style-02">
                            qui<span>nous sommes</span>
                        </h3>
                        <p>Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum <br>est. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...</p>
                    </header>
                    <div class="widget-content">
                        <div class="row ct-row-2">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="owl-carousel owl-carousel-4 owl-btn-03">
                                    <div class="item">
                                        <div class="entry-thumb">
                                            <img src="images/p16/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="item">
                                        <div class="entry-thumb">
                                            <img src="images/p16/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- item -->
                                </div>
                                <!-- owl-carousel-4 -->
                            </div>
                            <!-- col-md-6 -->

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h3 class="ct-title-10">Our History</h3>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.<br><br>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.<br><br>Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                            </div>
                            <!-- col-md-6 -->
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <!-- widget -->
            </div>
            <!-- container -->
        </section>
        <!-- kopa-area-2 -->

        <section class="kopa-area kopa-area-3">

            <div class="kopa-area-tg-2">
                <span></span>
            </div>

            <div class="kopa-area-tg-3">
                <span></span>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget reading-module-intro-6">
                            <header class="widget-header style-01">
                                <h3 class="widget-title style-02">
                                    nos<span>livres</span>
                                </h3>
                                <p>Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum <br>est. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...</p>
                            </header>
                            <div class="widget-content">
                                <ul class="row ul-mh">
                                    @foreach($about_categories as $category)
                                    <li class="col-md-6 col-sm-6 col-xs-6">
                                        <article class="entry-item ct-item-3{{ $counter % 2 == 0 ? '' : ' style-01' }}">
                                            <header class="clearfix">
                                                <div class="kopa-pull-left">
                                                    <h3 class="ct-title-10">{{ $category->name }}</h3>
                                                </div>
                                                <div class="kopa-pull-right">
                                                    <h4 class="ct-title-8">{{ count($category->books) }}</h4>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <a class="kopa-btn-6" href="{{ route('books.index') }}?category={{$category->slug}}">Voir tous les livres pour cette catégorie</a>
                                            </div>
                                        </article>
                                    </li>
                                    @php
                                        $counter++
                                    @endphp
                                    @endforeach
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
        <!-- kopa-area-3 -->

        <section class="kopa-area kopa-area-4">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <div class="widget reading-module-intro-7">
                            <h3 class="widget-title style-08">Business Strategy</h3>
                            <div class="widget-content">
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                                <strong>Register with us for future convenience :</strong>
                                <ul class="ct-list style-01">
                                    <li><span class="fa fa-paper-plane"></span>This is Photoshop's version  of Lorem Ipsum. Proin.</li>
                                    <li><span class="fa fa-paper-plane"></span>Proin gravida nibh vel velit auctor aliquet.</li>
                                    <li><span class="fa fa-paper-plane"></span>Nisi elit consequat ipsum, nec sagittis sem nibh</li>
                                    <li><span class="fa fa-paper-plane"></span>Duis sed odio sit amet nibh vulputate cursus a sit.</li>
                                    <li><span class="fa fa-paper-plane"></span>Sagittis sem nibh id elit. Duis sed odio sit amet nibh.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-6 -->

                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <div class="widget ">
                            <div class="widget-content">

                                <div class="kopa-accordion kopa-accordion-1">
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading active">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#">
                                                        <span class="btn-title"></span>
                                                        <span class="tab-title">Free Shipping for any ware</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.duis sed odio.
                                                </div>
                                            </div>
                                        </div>
                                        <!--/panel panel-default-->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#">
                                                        <span class="btn-title"></span>
                                                        <span class="tab-title">Gift Vochers for Kids</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.duis sed odio.
                                                </div>
                                            </div>
                                        </div>
                                        <!--/panel panel-default-->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#">
                                                        <span class="btn-title"></span>
                                                        <span class="tab-title">Looking to Buy</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.duis sed odio.
                                                </div>
                                            </div>
                                        </div>
                                        <!--/panel panel-default-->
                                    </div>
                                </div>
                                <!-- kopa-accordion -->

                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-6 -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-4 -->

        <section class="kopa-area kopa-area-5 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-4">
                <span></span>
            </div>

            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-10 col-sm-12 col-xs-12 col-md-push-1">

                        <div class="widget reading-module-carousel-1">
                            <h3 class="widget-title"></h3>
                            <div class="widget-content">
                                <div class="owl-carousel owl-carousel-1 owl-btn-01">
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img src="images/p4/1.jpg" alt=""></a>
                                            </div>
                                            <div class="entry-content">
                                                <p>“Nulla facilisi. Nulla ornare condimentum dui, sit amet condimentum elit rhoncus sit amet. Suspendisse luctus leo nisi, quis viverra velit viverra id. In mollis imperdiet lectus”</p>
                                                <span>- Liza D'souza</span>
                                                &nbsp;
                                                <span>CEO at Learning</span>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- item -->
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img src="images/p4/1.jpg" alt=""></a>
                                            </div>
                                            <div class="entry-content">
                                                <p>“Nulla ornare condimentum dui, sit amet condimentum elit rhoncus sit amet. Suspendisse luctus leo nisi, quis viverra velit viverra id. In mollis imperdiet lectus nulla facilisi.”</p>
                                                <span>- Liza D'souza</span>
                                                &nbsp;
                                                <span>CEO at Learning</span>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- item -->
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img src="images/p4/1.jpg" alt=""></a>
                                            </div>
                                            <div class="entry-content">
                                                <p>“Nulla ornare condimentum dui, sit amet condimentum elit rhoncus sit amet. Suspendisse luctus leo nisi, quis viverra velit viverra id. In mollis imperdiet lectus nulla facilisi.”</p>
                                                <span>- Liza D'souza</span>
                                                &nbsp;
                                                <span>CEO at Learning</span>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- item -->
                                </div>
                                <!-- owl-carousel-1 -->
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
        <!-- kopa-area-5 -->

        <section class="kopa-area kopa-area-6">

            <div class="kopa-area-tg-3">
                <span></span>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget reading-module-team-list-1">
                            <header class="widget-header style-01">
                                <h3 class="widget-title style-02">
                                    notre<span>équipe</span>
                                </h3>
                                <p>Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum <br>est. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...</p>
                            </header>
                            <div class="widget-content">
                                <ul class="ul-mh row">
                                    <li class="col-md-3 col-sm-3 col-xs-6 modded">
                                        <article class="entry-item">
                                            <div class="entry-top">
                                                <div class="entry-thumb">
                                                    <a href="#"><img src="{{ asset('images/p17/1.jpg') }}" alt="Amiel FURAAH"></a>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="#">Amiel FURAAH</a></h4>
                                                    <p class="entry-job">Business Manager</p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="col-md-3 col-sm-3 col-xs-6 modded">
                                        <article class="entry-item">
                                            <div class="entry-top">
                                                <div class="entry-thumb">
                                                    <a href="#"><img src="{{ asset('images/p17/2.jpg') }}" alt="Benjamine SOKI"></a>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="#">Benjamine SOKI</a></h4>
                                                    <p class="entry-job">Communications Officer  </p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="col-md-3 col-sm-3 col-xs-6 modded">
                                        <article class="entry-item">
                                            <div class="entry-top">
                                                <div class="entry-thumb">
                                                    <a href="#"><img src="{{ asset('images/p17/3.jpg') }}" alt="Ephraim BIYANDA"></a>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="#"></a>Ephraim BIYANDA</h4>
                                                    <p class="entry-job">Strategist Marketing</p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="col-md-3 col-sm-3 col-xs-6 modded">
                                        <article class="entry-item">
                                            <div class="entry-top">
                                                <div class="entry-thumb">
                                                    <a href="#"><img src="{{ asset('images/p17/4.jpg') }}" alt="Guerth MANZALA"></a>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="#">Guerth MANZALA</a></h4>
                                                    <p class="entry-job">Web Developer</p>
                                                </div>
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
        <!-- kopa-area-6 -->
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
