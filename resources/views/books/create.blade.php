<!DOCTYPE html>
<html>
<head>
    <title>Add a Book</title>
</head>
<body>
    <h1>Add a New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">

            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Author:</label>
            <input type="text" name="author" value="{{ old('author') }}">

            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Status:</label>
            <select name="status">
                <option value="to-read" {{ old('status', 'to-read') == 'to-read' ? 'selected' : '' }}>To Read</option>
                <option value="reading" {{ old('status') == 'reading' ? 'selected' : '' }}>Reading</option>
                <option value="finished" {{ old('status') == 'finished' ? 'selected' : '' }}>Finished</option>
            </select>

            @error('status')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Save Book</button>
    </form>

    <a href="{{ route('books.index') }}">Back to Books</a>
</body>
</html>