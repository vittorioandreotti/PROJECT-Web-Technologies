@can('showDiscount')
    @if ($product->sconto == 1)
    <div class="containerPriceCatalog"><h2 class='priceCatalog'> {{ number_format($product->getPrice(), 2, ',', '.') }} € </h2>
        <div class="realPriceCatalog"><h2><del>{{ number_format($product->prezzo, 2, ',', '.') }} €</del></h2></div>
    </div>
    @else 
    <h2 class="priceCatalog"> {{ number_format($product->getPrice(), 2, ',', '.') }} € </h2>
    @endif
@else 
<div class="priceCatalog"><h2> {{ number_format($product->prezzo, 2, ',', '.') }} € </h2></div>
@endcan
