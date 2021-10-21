<ul class="clearfix">
    <li >
        <a {{ request()->is('my-account') ? 'class=active' : '' }} href="{{ route('account.index') }}">Modifer mon profil</a>
    </li>
    <li>
        <a {{ request()->is('my-account/my-books') ? 'class=active' : '' }} href="{{ route('account.my_books') }}">Mes Livres</a>
        <span>({{ $books->count() }})</span>
    </li>
    <li>
        <a {{ request()->is('my-account/favorites') ? 'class=active' : '' }} href="{{ route('account.favorites') }}">Mes favoris</a>
        <span>({{ $favorites->count() }})</span>
    </li>
    <li>
        <a {{ request()->is('my-account/library') ? 'class=active' : '' }} href="{{ route('account.library') }}">Bibliothèque</a>
        <span>({{ $orders->count() }})</span>
    </li>
    <li>
        <a {{ request()->is('my-account/book/create') || request()->is('my-account/book/*') ? 'class=active' : '' }} href="{{ route('account.add_book') }}">Publier un livre</a>
    </li>
</ul>
