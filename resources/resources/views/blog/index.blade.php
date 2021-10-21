@extends('layouts.main')

@section('title') @parent Le blog @endsection

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
            <div class="kopa-area-tg-5">
                <span></span>
            </div>

            <div class="container">

                <div class="kopa-breadcrumb">

                    <h3>blog</h3>

                    <div class="breadcrumb-content">
                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" href="{{ route('home') }}">
                                    <span itemprop="title">Accueil</span>
                                </a>
                            </span>
                        <span>&nbsp;&nbsp;>&nbsp;&nbsp;</span>
                        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                <a itemprop="url" class="current-page">
                                    <span itemprop="title">blog</span>
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

                        <ul class="blog-article-list-1">
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
                                            <p>{{ $post->excerpt }}</p>
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
                        <!-- blog-article-list-1 -->

                        @if($posts->hasMorePages())
                        <nav class="navigation pagination" role="navigation">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            {{ $posts->links() }}
                        </nav>
                        <!-- pagination -->
                        @endif
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
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush
