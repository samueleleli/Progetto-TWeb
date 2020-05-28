@can('show-discount')
    <p class="price"> Prezzo attuale: {{ number_format($product->getPrice($product->flagSconto), 2, ',', '.') }} € </p>
    @if ($product->flagSconto == 1)
        <p class="discprice"> Prezzo originale: <del>{{ number_format($product->getPrice(false), 2, ',', '.') }} €</del><br>Sconto {{ $product->percSconto }}%</p>
    @endif
@else
    <p class="price"> Prezzo attuale: {{ number_format($product->getPrice(false), 2, ',', '.') }} € </p>
@endcan