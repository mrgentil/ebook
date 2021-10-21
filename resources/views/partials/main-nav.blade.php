<nav class="main-nav">

    <ul class="main-menu sf-menu">
        <li {{ request()->is('/') ? 'class=current-menu-item': '' }}>
            <a href="{{ route('home') }}">Accueil</a>
        </li>
        <li {{ request()->is('about-us') ? 'class=current-menu-item': '' }}><a href="{{ route('about.index') }}">A propos</a></li>

        <li {{ request()->is('books/*') || request()->is('books') || request()->is('cart') || request()->is('checkout') ? 'class=current-menu-item': '' }}>
            <a href="{{ route('books.index') }}">Livres</a>
            <ul>
                <li><a href="{{ route('cart.index') }}">panier</a></li>
                <li><a href="{{ route('checkout.index') }}">check out</a></li>
            </ul>
        </li>
        <li {{ request()->is('blog/*') || request()->is('blog') ? 'class=current-menu-item': '' }}>
            <a href="{{ route('blog.index') }}">blog</a>
        </li>
        <li {{ request()->is('contact-us') ? 'class=current-menu-item': '' }}><a href="{{ route('contact.index') }}">contact</a></li>
    </ul>

</nav>
<!-- main-nav -->
