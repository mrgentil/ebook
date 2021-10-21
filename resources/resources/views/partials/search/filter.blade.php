<form action="{{ route('search') }}" class="js-filter-form">
    <div class="loading js-loading" style="display: none">
        <div class="loader-spin"></div>
    </div>
<div class="widget woocommerce widget_product_categories" style="margin-bottom: 10px;">
    <h3 class="widget-title style-06" style="margin-bottom: 10px;">Recherche</h3>
        <p class="form-row form-row-wide">
            <input type="text" placeholder="Que cherchez vous ?"
                   style="height: 40px" class="form-control" name="query" value="{{ request()->query('query') }}">
        </p>
</div>
<!-- widget -->

<div class="widget woocommerce widget_product_categories">
    <h3 class="widget-title style-06">Catégories</h3>
    <ul class="product-categories">
        @foreach($categories as $category)
            <li>
                <input type="checkbox" value="{{ $category->id }}" {{ is_array(request()->query('categories'))
                    && in_array($category->id, request()->query('categories')) ?  'checked' : '' }} name="categories[]" id="category-{{ $category->id }}">
                <label style="color: #686868;font-weight: 400;text-transform: capitalize;" for="category-{{ $category->id }}">{{ $category->name }} ({{ $category->books_count }})</label>
            </li>
        @endforeach
    </ul>
</div>
<!-- widget -->

<div class="widget woocommerce widget_price_filter">
    <h3 class="widget-title style-06">prix</h3>
    <div class="widget-content">
        <div class="price_slider_wrapper">

            {{--<div class="slider-range-1"></div>

            <div class="price_slider_amount">
                <div class="price_label" style="">
                    Price: <span class="from"></span> — <span class="to"></span>
                </div>
            </div>--}}

            <div style="display: flex;">
                <input type="text" placeholder="Prix max"
                       style="height: 40px" class="form-control"  id="min" name="min" value="{{ request()->query('min') }}">
                <input type="text" placeholder="Prix min"
                       style="height: 40px" class="form-control" id="max" name="max" value="{{ request()->query('max') }}">
            </div>
            <div id="price-slider" data-min="{{ $min }}" data-max="{{ $max }}"></div>
        </div>
    </div>
</div>
<!-- widget -->

<div class="widget reading-module-product-filter-1">
    <h3 class="widget-title style-06">autres</h3>
    <input type="checkbox" value="free" {{ request()->query('status') ? 'checked' : '' }} name="status" id="status">
    <label for="status">Afficher uniquement les livres gratuits</label>
</div>
<p>
    <button class="button fullwidth margin-top-25" type="submit">Filtrer</button>
</p>
<!-- widget -->
</form>
