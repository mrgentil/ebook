<div class="kopa-pull-left">

   {{-- <form class="woocommerce-ordering" method="get">
        <select name="orderby" class="orderby">
            <option value="menu_order" selected="selected">Default sorting</option>
            <option value="popularity">Sort by popularity</option>
            <option value="rating">Sort by average rating</option>
            <option value="date">Sort by newness</option>
            <option value="price">Sort by price: low to high</option>
            <option value="price-desc">Sort by price: high to low</option>
        </select>
    </form>--}}
    <!-- woocommerce-ordering -->

   {{-- <ul class="ct-ul-2">
        <li class="grid-view active">
            <span class="fa fa-th"></span>
        </li>
        <li class="list-view">
            <span class="fa fa-list-ul"></span>
        </li>
    </ul>--}}
    <!-- ct-ul-2 -->

</div>

<div class="kopa-pull-right">
        {{--<form class="product-num-ordering" method="get">
            --}}{{--@sortablelink('cost', 'Trier selon le prix')--}}{{--
            <p>Show:</p>
            <select name="orderby" class="">
                <option value="12">12</option>
                <option value="18">18</option>
                <option value="24">24</option>
                <option value="50">50</option>
            </select>
        </form>--}}
        <!-- product-num-ordering -->

    {{ $books->links() }}
    <!-- woocommerce-pagination -->

    </div>

<!-- woocommerce-main-header -->
