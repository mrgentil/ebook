 <header class="kopa-page-header-1">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-2 col-sm-6 col-xs-6" style="display: flex;">
                <div class="hamburger-menu">
                    <span class="ti-menu"></span>
                </div>
                <!-- hamburger-menu -->

                <div class="kopa-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/header/congobook.png') }}" alt="Le logo de Congobook" style="min-width: 160px;">
                    </a>
                </div>
                <!-- logo -->
            </div>
            <!-- col-md-2 -->

            <div class="col-md-8 col-sm-0 col-xs-0">
                @include('partials.main-nav')
            </div>
            <!-- col-md-8 -->

            <div class="text-right col-md-2 col-sm-6 col-xs-6">

                @auth
                    <div class="kopa-cart kopa-dropdown">
                        <span class="ti-shopping-cart kopa-dropdown-btn">{{ \Cart::session(auth()->user()->id)->getTotalQuantity() }}</span>
                        <div class="kopa-dropdown-content">
                            <div class="cart-product-list">
                                <ul class="clearfix">
                                    @foreach (\Cart::session(auth()->user()->id)->getContent() as $book)
                                        <li class="product-item rm-item">
                                            <article>
                                                <div class="entry-thumb">
                                                    <a href="{{ $book['attributes']['slug_link'] }}">
                                                        <img src="{{ asset('storage/'. $book['attributes']['file']) }}" alt="{{ $book->name }}">
                                                    </a>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="{{ $book['attributes']['slug_link'] }}">{{ $book->name }}</a></h4>
                                                    <span class="product-price">{{ $book->price }} $</span>
                                                </div>
                                                <a href="{{ route('book.remove-to.cart', $book->id) }}" onclick="event.preventDefault();
                                                             document.getElementById('remove-item').submit();">
                                                    <span class="cart-remove fa fa-times-circle"></span></a>
                                                <form id="remove-item" action="{{ route('book.remove-to.cart', $book->id) }}" method="POST" style="display: none;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    @csrf
                                                </form>
                                            </article>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="cart-product-bottom">
                                <div class="kopa-pull-left">
                                    <h6>{{ \Cart::session(auth()->user()->id)->getTotal() }} $</h6>
                                    <span>{{ \Cart::session(auth()->user()->id)->getTotalQuantity() }} livre(s)</span>
                                </div>
                                <div class="kopa-pull-right">
                                    <a class="kopa-btn-3" href="{{ route('checkout.index') }}">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cart -->
                @endauth
                <div class="short-nav kopa-dropdown" style="{{ auth()->guest()  ? 'margin-top: 39px;font-size: 20px;': '' }}">
                    <div class="kopa-btn-1 kopa-dropdown-btn">
                    @if(auth()->check())
                        {{--<span></span>--}}
                        <img src="{{ auth()->user()->avatar_without_host }}" alt="{{ auth()->user()->name }}">
                    @else
                        <i class="fa fa-user"></i>
                    @endif
                    </div>
                    <div class="kopa-dropdown-content" style="{{ auth()->guest()  ? 'font-size: 14px !important;': '' }}">
                        <ul class="clearfix">
                             @if(auth()->check())
                                <li><a href="{{ route('account.index') }}"><i class="ti-settings"></i>Mon compte</a></li>
                                <li><a href="{{ route('account.favorites') }}"><i class="ti-heart"></i>Mes favoris</a></li>
                                <li><a href="{{ route('checkout.index') }}"><i class="ti-check"></i>Checkout</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-share-alt"></i>Déconnexion</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                 <li><a href="{{ route('login') }}"><i class="ti-user"></i>Connexion</a></li>
                                 <li><a href="{{ route('register') }}"><i class="ti-user"></i>Inscription</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- short-nav -->

                <div class="kopa-search-box-1 kopa-dropdown">
                    <span class="ti-search kopa-dropdown-btn"></span>
                    <form action="{{ route('search') }}" class="search-form-1 kopa-dropdown-content" method="get">
                        <input class="search-text" type="text"
                               onBlur="if (this.value == '') this.value = this.defaultValue;" onFocus="if (this.value == this.defaultValue)
                                    this.value = '';" value="Recherche..." placeholder="Recherche..." name="query">
                    </form>
                </div>
                <!-- search-box -->
            </div>
            <!-- col-md-2 -->
        </div>
        <!-- row -->
    </div>
</header>
<!-- kopa-page-header-1 -->
