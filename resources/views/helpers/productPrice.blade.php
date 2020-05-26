@can('showDiscount')
    @if ($selectedProduct->sconto == 1)
    <div class="price"><h2> {{ number_format($selectedProduct->getPrice(), 2, ',', '.') }} € </h2></div>
    <div class="sconto">Sconto: {{ $selectedProduct->percSconto }}%</div>
    <p class="realPrice">Valore: <del>{{ number_format($selectedProduct->prezzo, 2, ',', '.') }} €</del></p>
    @else 
    <h1 class="prezzo"> {{ number_format($selectedProduct->getPrice(), 2, ',', '.') }} € </h1>
    @endif
@else 
<div class="price"><h2>{{ number_format($selectedProduct->prezzo, 2, ',', '.') }} €</h2> </div>
@endcan