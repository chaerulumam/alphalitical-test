<div>
    @foreach ($sales as $sale)
        {{ $sale->product->product_name }}
    @endforeach
</div>