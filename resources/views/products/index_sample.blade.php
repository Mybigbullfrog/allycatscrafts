@foreach($products as $product)
    <h1>{{ $product->name}}</h1>
    <h4>{{ $product->description }}</h4>
    <h4>${{ number_format($product->price, 2, '.') }}</h4>
@endforeach
