<li class="col-md-4 col-sm-4 col-xs-4" id="book-{{ $book->id }}">
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
