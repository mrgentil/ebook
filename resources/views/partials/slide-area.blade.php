<section class="slide-area" style="background: url({{ asset('images/header/bg/2.jpg') }});">

    <div class="close-btn">
        <span class="close-icon ti-close"></span>
    </div>

    <div class="slide-container">

        <nav class="slide-nav">
            <h3 class="ct-title-1">
                Liens Rapides
            </h3>
            <ul class="slide-menu">
                <li class="current-menu-item">
                    <a href="{{ route('home') }}">accueil</a>
                </li>
                <li>
                    <a href="{{ route('books.index') }}">livres</a>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}">blog</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}">a propos</a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}">contact</a>
                </li>
            </ul>
        </nav>
        <!-- slide-nav -->

        <nav class="slide-nav">
            <h3 class="ct-title-1">
                Mon compte
            </h3>
            <ul class="slide-menu">
                <li><a href="{{ route('account.index') }}">Mon compte</a></li>
                <li><a href="{{ route('account.my_books') }}">Mes livres</a></li>
                <li><a href="{{ route('account.favorites') }}">Mes favoris</a></li>
                <li><a href="{{ route('account.library') }}">Bibliothèque</a></li>
                <li><a href="{{ route('account.add_book') }}">Publier Un Livre</a></li>
            </ul>
        </nav>
        <!-- slide-nav -->



        <div class="kopa-social-links style-01">
            <ul class="clearfix">
                <li><a href="https://www.facebook.com/%C3%9Cmoja-Technology-1885550481697858/" target="_blank" class="fa fa-facebook"></a></li>
                <li><a href="https://twitter.com/TechnologyUmoja" class="fa fa-twitter" target="_blank"></a></li>
                <li><a href="https://www.instagram.com/umojatechnology/?hl=fr" class="fa fa-instagram" target="_blank"></a></li>
                <li><a href="https://www.youtube.com/channel/UCqsL4JeNFXXh5LIzQ8Chegg" class="fa fa-youtube" target="_blank"></a></li>
            </ul>
        </div>
        <!-- social-links -->

    </div>

</section>
