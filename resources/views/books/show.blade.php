@extends('layouts.main')

@section('title') @parent Le livre : {{ $book->title  }} @endsection

@section('description')
    {{ $book->title }}
@endsection

@section('meta-image')
    {{ $book->file_in_front }}
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
    <style>
        .woocommerce .entry-summary div[class*="add-to-wishlist"] i.unlike:before, .woocommerce-page .entry-summary div[class*="add-to-wishlist"] i.unlike:before {
            content: "\e634";
            font-family: inherit !important;
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
                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">{{ ucfirst($book->title)  }}</span>
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

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include('flash::message')
                        <div itemscope="" itemtype="http://schema.org/Product" class="product">
                            <div class="ct-item-4woocommerce-area-1">
                                <div class="images">
                                    <div class="badge-icon-1 style-04">
                                        @if($book->status === 'PAYANT')
                                            Payant
                                        @else
                                            Gratuit
                                        @endif
                                        <span></span>
                                    </div>
                                    <a href="{{ $book->image }}" itemprop="image" class="woocommerce-main-image zoom" title="{{ $book->title  }}" data-rel="prettyPhoto[product-gallery]">
                                        <img src="{{ $book->file_in_front }}" style="max-height: 500px;" alt="{{ $book->title  }}">
                                    </a>
                                </div>
                                <div class="summary entry-summary">
                                    <div class="kopa-pull-left">
                                        <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                            <div class="star-rating" title="">
                                                    <span>
                                                        <strong itemprop="ratingValue" class="rating">{{ $averageRating }}</strong>
                                                        sur 5
                                                    </span>
                                            </div>
                                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow"><span itemprop="ratingCount" class="count">{{ $count_rating }}</span> avis des clients</a>
                                        </div>
                                    </div>
                                    <div class="kopa-pull-right">
                                        <div class="add-to-wishlist">
                                            <div>
                                                <a href="#"  onclick="event.preventDefault();document.getElementById('addToFavorite').submit();"
                                                        class="add_to_wishlist">
                                                    <i class="ti-heart{{ !$isFavorited ? ' unlike' : '' }}"></i>
                                                    <span>Ajoutez au favoris</span>
                                                </a>
                                                <form class="cart" id="addToFavorite"  method="post" action="{{ route('favorite', $book) }}">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h1 itemprop="name" class="product_title entry-title">
                                        {{ $book->title }}
                                    </h1>
                                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        @if($book->status === 'PAYANT')
                                        <p class="price">
                                            <ins><span class="amount">{{ $book->cost }} $</span></ins>
                                        </p>
                                        @else
                                        <p class="price">
                                            <ins><span class="amount">Gratuit</span></ins>
                                        </p>
                                        @endif
                                    </div>
                                    <div itemprop="description">
                                        <p>{{ $book->description }}</p>
                                    </div>
                                    <form class="cart" method="post" action="{{ route('book.add-to.cart', $book) }}">
                                        @csrf
                                        <button type="submit" class="single_add_to_cart_button button alt">Ajouter au panier</button>
                                    </form>
                                    <div class="product_meta">
                                        <span class="posted_in">Categories: <a href="{{ route('books.index') }}?category={{ $book->category->slug }}" rel="tag">{{ $book->category->name }}</a>.</span>
                                    </div>
                                </div>
                                <!-- summary -->
                            </div>
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs">
                                    <li class="description_tab">
                                        <a href="#tab-description">Description</a>
                                    </li>
                                    <li class="reviews_tab active" >
                                        <a href="#tab-reviews">Avis ({{ $count_rating }})</a>
                                    </li>
                                </ul>
                                <div class="panel entry-content wc-tab" id="tab-description">
                                    <h2>Description du livre</h2>
                                    <p>{{ $book->description }}</p>
                                </div>
                                <div class="panel entry-content wc-tab active" id="tab-reviews">
                                    <div id="reviews">
                                        <div id="comments">
                                            <h2>{{ $count_rating }} avis pour ce livre.</h2>
                                            <ol class="commentlist">
                                                @foreach($ratings as $rating)
                                                <li itemprop="review" itemscope="" itemtype="http://schema.org/Review" class="comment">
                                                    <div class="comment_container">
                                                        <img alt="{{ $rating->author->name }}" src="{{ $rating->author->avatar_without_host }}" class="avatar">
                                                        <div class="comment-text">
                                                            <div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="star-rating" title="">
                                                                <span><strong itemprop="ratingValue">{{ $rating->rating }}</strong> sur 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong itemprop="author">{{ $rating->author->name }}</strong> – <time itemprop="datePublished" datetime="2016-06-07T11:57:59+00:00">{{ $rating->created_at }}</time>:
                                                            </p>
                                                            <div itemprop="description" class="description">
                                                                <p>{{ $rating->body }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <h3 class="comment-reply-title">Ajouter un avis sur ce livre</h3>
                                                    @include('flash::message')
                                                    <form action="{{ route('review', $book) }}" method="post" class="comment-form ct-form-box" novalidate="">
                                                        @csrf
                                                         <p class="comment-form-comment">
                                                            <label>Une note</label>
                                                            <select name="rating">
                                                                @for($i = 1; $i < 6; $i++)
                                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <label>Votre commentaire</label>
                                                            <textarea name="body" cols="45" rows="4"></textarea>
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" class="submit" value="Soumettre">
                                                        </p>
                                                    </form>
                                                </div>
                                                <!-- #respond -->
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="related products">
                                <h2>Livres de la même catégorie</h2>
                                <ul class="products ul-mh">
                                    @foreach($related_books as $book)
                                        <li class="col-md-3 col-sm-3 col-xs-3">
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
                                                                <span style="display:block;font-size: 14px"><i class="fa fa-user"></i> {{ $book->author_name ? $book->author_name : $book->user->name }}</span>
                                                            </h4>
                                                            <div class="kopa-rating">
                                                                <ul>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li class="hactive"><span class="fa fa-star"></span></li>
                                                                    <li class="inactive"><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
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
                                                                        <a href="#">
                                                                            ({{$book->count_reviews}}) Avis
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
                                        <!-- product-item -->
                                    @endforeach
                                </ul>
                            </div>
                        </div>

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
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
