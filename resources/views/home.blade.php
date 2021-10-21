@extends('layouts.main')

@section('title') @parent Accueil @endsection

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
    <style>
        @font-face {
            font-family: 'Azonix Regular';
            font-style: normal;
            font-weight: normal;
            src: local('Azonix Regular'), url('fonts/Azonix.woff') format('woff');
        }
         #mCSB_2_scrollbar_horizontal{
                display: none !important;
            }
        .title_home{
            color: #FFF !important;
        }
        @media (max-width:768px){
            .title_home{
                font-size: 21px;
                color: #FFF;
            }
        }
    </style>
@endpush
@section('content')
    <div id="main-content">

        <section class="kopa-area kopa-area-1 kopa-area-parallax white-text-style" style="background: url({{ asset('img/background/3.jpg') }});background-position: center;">

            <div class="kopa-area-tg-1">
                <span></span>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget reading-module-promo-1">
                            <div class="widget-content">
                                <div class="promo-text promo-text-2" style="font-family:'Azonix Regular'">
                                    CONGOBOOK

                                </div>
                                <div class="promo-text" style="font-size: 45px;line-height:40px;">
                                    <div class="wow fadeInUpBig" data-wow-duration="0.4s" data-wow-delay="0.4s" style="color: #FFF !important">
                                        <span class="title_home">
                                            La Bibliothèque numérique congolaise !
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget -->
                        <!-- widget -->

                    </div>
                    <!-- col-md-12 -->

                </div>
                <!-- row -->

                <div class="row">

                    <div class="col-md-8 col-sm-12 col-xs-12 col-md-push-2 col-sm-push-0 col-xs-push-0">

                        <div class="widget reading-module-search-1" style="background: #28235d;">
                            <div class="row">

                                <div class="col-md-8 col-sm-12 col-xs-12 col-md-push-2 col-sm-push-0 col-xs-push-0">

                                    <div class="widget-content">
                                        <h3>Effectuez une recherche rapide...</h3>
                                        <div class="search-box-1">
                                            <form action="{{ route('search') }}" class="search-form-1" method="get">
                                                <input type="text" onBlur="if (this.value == '')
                                                        this.value = this.defaultValue;" onFocus="if (this.value == this.defaultValue)
                                                        this.value = '';" value="Entrez un mot clé" name="query" class="search-text">
                                                <button type="submit" class="search-submit kopa-btn-4">
                                                    Rechercher
                                                </button>
                                            </form>
                                        </div>
                                        <!--search-box-->
                                    </div>

                                </div>
                                <!-- col-md-8 -->

                            </div>
                            <!-- row -->
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-12 -->

                </div>
                <!-- row -->

            </div>

        </section>
        <!-- kopa-area-1 -->


        <!-- kopa-area-2 -->

        <section class="kopa-area kopa-area-3">

            <div class="kopa-area-tg-2">
                <span></span>
            </div>

            <div class="kopa-area-tg-3">
                <span></span>
            </div>

            <div class="ct-icon-2">
                <span class="ti-book"></span>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget reading-module-filter-1">
                            <header class="widget-header style-01">
                                <h3 class="widget-title style-02">
                                    derniers<span>Livres</span>
                                </h3>
                                <p>Nous vous présentons une variété de livres placés par catégories<br>afin de vous permettre de lire le bon livre au bon endroit.</p>
                            </header>
                            <div class="widget-content">

                                <header class="masonry-header">
                                    <div class="masonry-filter style-01">
                                        <a href="#" data-val="*" class="style-01 active"><span></span>Toutes</a>

                                        @foreach($categories as $category)
                                            <a href="#" data-val="{{ $category->id }}" class="style-0{{$counter}}"><span></span>{{ $category->name }}</a>
                                            @php
                                                $counter++;
                                                if($counter > 5){
                                                    $counter = 2;
                                                }
                                            @endphp
                                        @endforeach

                                    </div>
                                    <!-- masonry-filter -->
                                    <a href="{{ route('books.index') }}" class="kopa-btn-5">voir tout</a>
                                </header>

                                <div class="masonry-container row">
                                    @foreach($books as $book)
                                        <div class="ms-item-01 show col-md-3 col-sm-3 col-xs-3" data-val="{{ $book->category->id }}">
                                            <article class="entry-item ct-item-1 style-0{{ $book->status === 'GRATUIT' ? '1' : '4'  }}">
                                                <div class="entry-thumb">
                                                    <a href="{{ $book->slug_link }}">
                                                        <img src="{{ $book->file_in_front }}" alt="{{ $book->title }}">
                                                    </a>
                                                    <div class="entry-content">
                                                        <header>
                                                            <h4 class="entry-title">
                                                                <a href="{{ $book->slug_link }}">
                                                                    {{ str_limit($book->title, 100) }}
                                                                </a>
                                                                <span style="display:block;font-size: 14px;font-family:'Azonix Regular';color:#FAD01E"><i class="fa fa-user"></i> {{ $book->author_name ? $book->author_name : $book->user->name }}</span>
                                                            </h4>

                                                        </header>
                                                        <p>{!!  str_limit($book->description, 100) !!} </p>
                                                        <p class="ct-space-1"></p>

                                                        <footer>
                                                            <div class="ft-wrap style-01">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" style="font-family:'Azonix Regular';font-size: 16px;">
                                                                            {{ $book->cost ? $book->cost . ' $' : 'Gratuit' }}
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('books.index') }}?category={{ $book->category->slug }}">
                                                                            <i class="fa fa-folder-o"></i>
                                                                            {{ $book->category->name }}
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="ft-wrap style-02">
                                                                <ul>
                                                                    <li>
                                                                        <div class="add-to-wishlist">
                                                                            <div>
                                                                                <a href="#"  onclick="event.preventDefault();document.getElementById('addToFavorite{{ $book->id }}').submit();"
                                                                                   class="add_to_wishlist {{ $book->isFavorited() ? 'liked' : '' }}">
                                                                                    <i class="ti-heart"></i>
                                                                                    <span>Ajoutez au favoris</span>
                                                                                </a>
                                                                                <form class="cart" id="addToFavorite{{ $book->id }}"  method="post" action="{{ route('favorite', $book) }}">
                                                                                    @csrf
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('book.add-to.cart', $book) }}"
                                                                           onclick="event.preventDefault();document.getElementById('addToCart{{ $book->id }}').submit();">
                                                                            <i class="ti-shopping-cart"></i>
                                                                            <span>Ajouté au panier</span>
                                                                        </a>
                                                                        <form class="cart" id="addToCart{{ $book->id }}"  method="post" action="{{ route('book.add-to.cart', $book) }}">
                                                                            @csrf
                                                                        </form>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ $book->slug_link }}" target="blank">
                                                                            <i class="ti-new-window"></i>
                                                                            <span>Details</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </article>
                                            <div class="badge-icon-1 style-0{{ $book->status === 'GRATUIT' ? '1' : '2'  }}">
                                                {{ $book->status }}
                                                <span></span>
                                            </div>
                                    </div>
                                    <!-- masonry-item -->
                                    @endforeach
                                </div>
                                <!-- masonry-container -->

                                <div class="text-center">
                                    <a class="kopa-btn-6" href="{{ route('books.index') }}">Voir tout</a>
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
        <!-- kopa-area-3 -->

      {{--  <section class="kopa-area kopa-area-6 modded">

            <div class="kopa-area-tg-3" style="background: transparent">
                <span></span>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-content">
                                <div class="owl-carousel owl-carousel-6 owl-btn-03">
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img src="{{ asset('images/one/4.jpg') }}" alt="ZamengApp Ad"></a>
                                                <div class="ct-mask style-01"></div>
                                            </div>
                                            <div class="entry-content">
                                               --}}{{-- <h4 class="ct-title-11">Today<span>Offter</span></h4>
                                                <h5 class="ct-title-12">UPTo <strong>30%</strong> OFF On Books</h5><a href="#" class="kopa-btn-3">Shop now</a>--}}{{--

                                            </div>
                                        </article>
                                    </div>
                                    <!-- item -->
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img src="{{ asset('images/one/4.jpg') }}" alt="ZamengApp Ad"></a>
                                                <div class="ct-mask style-01"></div>
                                            </div>
                                            <div class="entry-content">
                                                --}}{{-- <h4 class="ct-title-11">Today<span>Offter</span></h4>
                                                <h5 class="ct-title-12">UPTo <strong>30%</strong> OFF On Books</h5><a href="#" class="kopa-btn-3">Shop now</a>--}}{{--
                                            </div>
                                        </article>
                                    </div>
                                    <!-- item -->
                                </div>
                                <!-- owl-carousel-6 -->

                            </div>

                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-12 -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </section>--}}
        <!-- kopa-area-5 -->

        <section class="kopa-area kopa-area-4">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="widget reading-module-scroll reading-module-scroll-1 ct-scroll-theme-1">
                            <header class="widget-header style-01">
                                <h3 class="widget-title style-02">
                                    notre<span>blog</span>
                                </h3>
                                <p>Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum <br>est. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...</p>
                            </header>
                            <div class="widget-content">
                                <ul class="item-list clearfix">
                                    @forelse($posts as $post)
                                        <li>
                                            <article class="entry-item">
                                                <div class="entry-thumb">
                                                    <a href="{{ $post->slug_link }}"><img src="{{ $post->image }}" alt="{{ $post->title }}"></a>
                                                    <div class="ct-mask">
                                                        <a href="{{ $post->slug_link }}" class="ct-icon"></a>
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <a href="{{ $post->slug_link }}" class="kopa-btn-7">
                                                        {{ $post->created_at }}
                                                    </a>
                                                    <h4 class="entry-title"><a href="{{ $post->slug_link }}">{{ $post->title }}</a></h4>
                                                    {{--<p>{{ str_limit($post->excerpt, 60) }}</p>--}}
                                                    <footer class="clearfix">
                                                        <div class="kopa-pull-left">
                                                            <a href="{{ $post->slug_link }}" class="more-link">Lire plus</a>
                                                        </div>
                                                        <div class="kopa-pull-right">
                                                            <ul class="clearfix">
                                                                <li>
                                                                    <a href="#" class="ct-icon-3">
                                                                        <i class="fa fa-comments"></i>
                                                                        <span class="ct-icon-4">{{ count($post->comments) }}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </footer>
                                                </div>
                                            </article>
                                        </li>
                                    @empty
                                        <li>
                                            <article class="entry-item" style="padding: 10px">
                                                <div class="entry-thumb">Aucun article trouvé.</div>
                                            </article>
                                        </li>
                                    @endforelse
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
        <!-- kopa-area-4 -->
        <section class="kopa-area kopa-area-5 kopa-area-parallax white-text-style">

            <div class="kopa-area-tg-4">
                <span></span>
            </div>

            <div class="kopa-area-tg-5" style="background: none">
                <span></span>
            </div>

            <div class="ct-icon-2">
                <span class="fa fa-star"></span>
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
                                                <a href="#"><img src="{{ asset('images/p4/amadou.jpg') }}" alt="Amadou Ampate Ba"></a>
                                            </div>
                                            <div class="entry-content">
                                                <p>“En Afrique, quand un vieillard meurt, c'est toute une bibliothèque qui  brûle.”</p>
                                                <span>Amadou Ampate Ba</span>&nbsp;
                                                <span></span>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- item -->
                                    <div class="item">
                                        <article class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img src="{{ asset('images/p4/amiel.jpg') }}" alt="Amiel FURAAH"></a>
                                            </div>
                                            <div class="entry-content">
                                                <p>“Avec la littérature ,les sages ne meurent presque pas”</p>
                                                <span>Amiel FURAAH</span>
                                                &nbsp;
                                                <span>Ecrivain </span>
                                            </div>
                                        </article>
                                    </div>
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
        <!-- kopa-area-6 -->


        {{--<section class="kopa-area kopa-area-7">

            <div class="container">

                <div class="row">

                    <div class="col-md-5 col-sm-5 col-xs-5">

                        <div class="widget reading-module-intro-1">
                            <header class="widget-header style-02">
                                <h4 class="widget-sub-title">Téléchargez </h4>
                                <h3 class="widget-title">CONGOBOOK</h3>
                            </header>
                            <div class="widget-content">
                                <p>Congobook est disponible pour ordinateurs et Smartphones dans le but de vous mettre à l'aise au format que vous aimez le plus.</p>
                                <div class="ct-box-1">
                                    <h5>Le téléchargement</h5>
                                    <p> est totalement <span class="txt-main-color"> gratuit</span> sur  :</p>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="images/p5/2.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-5 -->

                    <div class="col-md-7 col-sm-7 col-xs-7">

                        <div class="widget reading-module-ads-2">
                            <div class="widget-content">
                                <img class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s" src="images/p6/1.png" alt="">
                                <img class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.6s" src="images/p6/2.png" alt="">
                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-7 -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </section>--}}
        <!-- kopa-area-7 -->

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
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
