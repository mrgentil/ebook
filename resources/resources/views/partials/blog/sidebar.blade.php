<div class="sidebar style-01 col-md-4 col-sm-4 col-xs-4">

    <div class="widget widget_search">
        <h3 class="widget-title style-06">Recherche</h3>
        <div class="search-box">
            <form action="#" class="search-form clearfix" method="get">
                <input type="text" onblur="if (this.value == '') this.value = this.defaultValue;" onfocus="if (this.value == this.defaultValue)
                    this.value = '';" value="Trouvez un article" name="s" class="search-text">
                <button type="submit" class="search-submit">
                    Recherchez
                </button>
            </form>
            <!-- search-form -->
        </div>
    </div>
    <!-- widget -->

    <div class="widget widget_categories">
        <h3 class="widget-title style-06">Les Catégories Du Blog</h3>
        <ul class="clearfix">
            @foreach($categories as $category)
                <li>
                    <a href="#">{{ $category->name }}</a>
                    <span>(10)</span>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- widget -->

    {{--<div class="widget reading-module-article-list-4">
        <h3 class="widget-title style-06">Les plus populaires</h3>
        <div class="widget-content">
            <ul>
                <li>
                    <article class="entry-item">
                        <div class="entry-thumb">
                            <a href="#"><img src="{{ asset('images/p15/1.jpg') }}" alt=""></a>
                            <div class="ct-mask">
                                <a href="#" class="ct-icon style-01"></a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="#">Aenean condime ntum felis non...</a></h4>
                            <div class="entry-meta">
                                <p class="entry-date"><i class="fa fa-calendar-o"></i>May 1, 2016</p>
                            </div>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="entry-item">
                        <div class="entry-thumb">
                            <a href="#"><img src="{{ asset('images/p15/2.jpg') }}" alt=""></a>
                            <div class="ct-mask">
                                <a href="#" class="ct-icon style-01"></a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="#">Aenean condime ntum felis non...</a></h4>
                            <div class="entry-meta">
                                <p class="entry-date"><i class="fa fa-calendar-o"></i>May 1, 2016</p>
                            </div>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="entry-item">
                        <div class="entry-thumb">
                            <a href="#"><img src="{{ asset('images/p15/3.jpg') }}" alt=""></a>
                            <div class="ct-mask">
                                <a href="#" class="ct-icon style-01"></a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="#">Aenean condime ntum felis non...</a></h4>
                            <div class="entry-meta">
                                <p class="entry-date"><i class="fa fa-calendar-o"></i>May 1, 2016</p>
                            </div>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="entry-item">
                        <div class="entry-thumb">
                            <a href="#"><img src="{{ asset('images/p15/4.jpg') }}" alt=""></a>
                            <div class="ct-mask">
                                <a href="#" class="ct-icon style-01"></a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="#">Aenean condime ntum felis non...</a></h4>
                            <div class="entry-meta">
                                <p class="entry-date"><i class="fa fa-calendar-o"></i>May 1, 2016</p>
                            </div>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </div>--}}
    <!-- widget -->

    <div class="widget reading-module-instagram-1">

        <h3 class="widget-title style-06">instagram</h3>
        <div class="widget-content">
            <ul class="clearfix">
                @for ($i = 1; $i <= 6 ; $i++)
                    <li>
                        <a href="#">
                            <img src="{{ asset("images/p22/{$i}.jpg") }}" alt="">
                        </a>
                    </li>
                @endfor
            </ul>
        </div>
        <!-- widget-content -->

    </div>
    <!-- widget -->


    <div class="widget reading-module-fb-1">
        <h3 class="widget-title style-06">Retrouvez Nous Sur Facebook</h3>
        <div class="widget-content">
            <iframe class="ct-iframe-3" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkopatheme%2F"></iframe>
        </div>
    </div>
    <!-- widget -->

    <div class="widget reading-module-twitter-1">
        <h3 class="widget-title style-06">Derniers Tweets</h3>
        <div class="widget-content">
            <ul>
                <li>
                    <article class="entry-item">
                        <header>
                            <div class="entry-thumb">
                                <a href="#"><img src="{{ asset('images/p23/1.jpg') }}" alt=""></a>
                            </div>
                            <div class="header-content">
                                <h4 class="entry-title"><a href="#">Envato Studio</a></h4>
                                <a href="#">@EnvatoStudio</a>
                            </div>
                        </header>
                        <p>A community of handpicked developers and designers, available just for you.</p>
                        <footer>
                            <a href="#">#envatostudio</a>
                            <p>6 hours ago</p>
                        </footer>
                    </article>
                </li>
                <li>
                    <article class="entry-item">
                        <header>
                            <div class="entry-thumb">
                                <a href="#"><img src="{{ asset('images/p23/2.jpg') }}" alt=""></a>
                            </div>
                            <div class="header-content">
                                <h4 class="entry-title"><a href="#">Adobe Customer Care</a></h4>
                                <a href="#">@AdobeCare</a>
                            </div>
                        </header>
                        <p>A community of handpicked developers and designers, available just for you.</p>
                        <footer>
                            <a href="#">http://forums.adobe.com</a>
                            <p>8 hours ago</p>
                        </footer>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    <!-- widget -->

</div>
