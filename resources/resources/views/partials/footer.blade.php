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
                                    <a href="#"><img src="{{ asset('images/p12/1.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/2.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/3.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/4.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/5.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/1.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/2.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/3.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/4.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/5.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/1.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/2.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/3.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/4.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('images/p12/5.png') }}" alt=""></a>
                                </div>
                                <!-- item -->
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
<!-- kopa-area-7 -->
<div class="bottom-sidebar kopa-area white-text-style style-01">

    <div class="kopa-area-tg-4">
        <span></span>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-3">

                <div class="widget reading-module-intro-2">
                    <div class="widget-content">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/header/congobook-2.png') }}" alt="Logo ZamengApp">
                        </a>
                        <p>« La sagesse  congolaise est un atout pour l’évolution de la société mondiale. D’où, sa mise en avant est une réelle valeur ajoutée.</p>

                        <div class="kopa-social-links style-02">
                            <ul class="clearfix">
                                <li><a href="https://www.facebook.com/%C3%9Cmoja-Technology-1885550481697858/" target="_blank" class="fa fa-facebook"></a></li>
                                <li><a href="https://twitter.com/TechnologyUmoja" target="_blank" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.instagram.com/umojatechnology/?hl=fr" target="_blank" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.youtube.com/channel/UCqsL4JeNFXXh5LIzQ8Chegg" target="_blank" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- widget -->

            </div>
            <!-- col-md-3 -->

            <div class="col-md-3 col-sm-3 col-xs-3">

                <div class="widget widget_nav_menu ct-widget-1">
                    <h3 class="widget-title style-04">Mon<span>Compte</span></h3>
                    <ul class="clearfix">
                        <li><a href="{{ route('account.index') }}">Mon compte</a></li>
                        <li><a href="{{ route('account.my_books') }}">Mes livres</a></li>
                        <li><a href="{{ route('account.favorites') }}">Mes favoris</a></li>
                        <li><a href="{{ route('account.library') }}">Bibliothèque</a></li>
                        <li><a href="{{ route('account.add_book') }}">Publier Un Livre</a></li>
                        @if(auth()->check())
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                            <li><a href="{{ route('register') }}">Inscription</a></li>
                        @endif
                    </ul>
                </div>
                <!-- widget -->
            </div>
            <!-- col-md-3 -->

            <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="widget widget_nav_menu ct-widget-1">
                    <h3 class="widget-title style-04">les<span>catégories</span></h3>

                    <ul class="clearfix">
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('books.index') }}?category={{ $category->slug }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- widget -->

            </div>
            <!-- col-md-3 -->

            <div class="col-md-3 col-sm-3 col-xs-3">

                <div class="widget widget_nav_menu ct-widget-1">
                    <h3 class="widget-title style-04">liens<span>rapides</span></h3>
                    <ul class="clearfix">
                        <li>
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('books.index') }}">Livres</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}">A propos</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- widget -->

            </div>
            <!-- col-md-3 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</div>
<!-- bottom-sidebar -->
<footer class="kopa-footer">
    <div class="container">
        <div class="kopa-pull-left">
            <p class="copyright">
                &copy; Copyright {{ date('Y') }} Congobook | Powered by <a href="https://umojatechnology.com" target="_blank">Ümoja Technology</a>
            </p>
        </div>
    </div>
    <!-- container -->
</footer>
