@foreach($books as $book)
    <h2>{{ $book->title}}</h2>
    <h4>{{ $book->description }}</h4>
    <h4>{{ $book->pages_count }} pages</h4>
    <h4>Cost: ${{ number_format($book->price, 2, '.') }}</h4>
    <hr>
@endforeach
