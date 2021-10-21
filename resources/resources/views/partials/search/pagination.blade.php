@if($books->hasMorePages())
<div class="kopa-pull-left">

    <p class="woocommerce-result-count">
        Showing 11–20 of {{ $books->total() }} results
    </p>

</div>

<div class="kopa-pull-right">
{{ $books->links() }}
<!-- woocommerce-pagination -->
</div>
@endif
<!-- woocommerce-main-footer -->
