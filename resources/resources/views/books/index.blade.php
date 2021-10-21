@extends('layouts.main')

@section('title') @parent {{ isset($query) && !empty($query) ? 'Tous les livres de la catégorie ' . $categoryName : 'Tous les livres'  }} @endsection

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
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/woocommerce.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('nouislider/nouislider.min.css') }}" media="all"/>
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

                    <h3>{{ isset($query) && !empty($query) ? 'Tous les livres de la catégorie ' . $categoryName : 'Tous les livres'  }}</h3>



                    @if(isset($query) && !empty($query))
                        <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                            <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('books.index') }}">
                                    <span itemprop="title">Tous les livres</span>
                                </a>
                            </span>
                            <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">{{ $categoryName }}</span>
                                </a>
                            </span>
                        </div>
                    @else
                        <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                            <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">Les livres</span>
                                </a>
                            </span>
                        </div>
                    @endif

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
                    <div class="main-col style-01 col-md-12 col-sm-12 col-xs-12">
                        <div class="woocommerce-main-primary">

                            @if($books->hasMorePages())
                            <header class="woocommerce-main-header">

                                <div class="kopa-pull-left">


                                    <ul class="ct-ul-2">
                                        <li class="grid-view active">
                                            <span class="fa fa-th"></span>
                                        </li>
                                        <li class="list-view">
                                            <span class="fa fa-list-ul"></span>
                                        </li>
                                    </ul>
                                    <!-- ct-ul-2 -->

                                </div>

                                <div class="kopa-pull-right">

                                    {{ $books->links() }}
                                    <!-- woocommerce-pagination -->

                                </div>

                            </header>
                            <!-- woocommerce-main-header -->
                            @endif
                            <div class="woocommerce-main-content">

                                <ul class="ul-mh row">
                                    @forelse($books as $book)
                                        <li class="col-md-3 col-sm-3 col-xs-3" id="book-{{ $book->id }}">
                                            <article class="entry-item ct-item-4 style-0{{ $book->status === 'GRATUIT' ? '1' : '4'  }}">
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
                                                        @if($book->status === 'PAYANT')
                                                            <div class="ct-icon-1">
                                                                <p>{{ $book->cost }} <span>$</span></p>
                                                            </div>
                                                        @endif
                                                        <footer>
                                                            <div class="ft-wrap style-01">
                                                                <ul>
                                                                   
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
                                                                            <span>Ajouter au panier</span>
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
                                        </li>
                                    @empty
                                        <li class="col-md-12 col-sm-12 col-xs-12">
                                            Aucun livre trouvé
                                        </li>
                                    @endforelse
                                </ul>

                            </div>
                            <!-- woocommerce-main-content -->

                            <footer class="woocommerce-main-footer">

                                <div class="kopa-pull-left">

                                    <p class="woocommerce-result-count">
                                        Showing 11–20 of {{ $books->total() }} results
                                    </p>

                                </div>

                                <div class="kopa-pull-right">
                                    {{ $books->links() }}
                                    <!-- woocommerce-pagination -->
                                </div>

                            </footer>
                            <!-- woocommerce-main-footer -->

                        </div>
                        <!-- woocommerce-main-primary -->

                    </div>
                    <!-- col-md-9 -->
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
    <script src="{{ asset('nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
