
@forelse($books as $book)
    @include('partials.books.show')
@empty
    <li class="col-md-12 col-sm-12 col-xs-12">
        Aucun livre trouvé
    </li>
@endforelse


<!-- woocommerce-main-content -->
