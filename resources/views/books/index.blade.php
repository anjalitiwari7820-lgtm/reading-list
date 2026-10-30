<!DOCTYPE html>
<html>
<head>
    <title>Reading List</title>
</head>
<body>
    <h1>My Reading List</h1>
    <a href="{{ route('books.create') }}">Add Book</a>

    @if($books->isEmpty())
        <p>No books yet</p>
    @else
        @foreach($books as $book)
            <div>
                <h2>{{ $book->title }}</h2>
                <p>Author: {{ $book->author }}</p>
                <p>Status: {{ $book->status }}</p>
            </div>
            <hr>
        @endforeach
    @endif
</body>
</html>