    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>

<div class="edit-container">
    <div class="edit-tab">Editing: {{ $item->name }}</div>
    
    <div class="edit-box">
        <form action="/books/{{ $item->id }}" method="POST" class="book-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Book Name:</label>
                <input type="text" name="bName" value="{{ $item->book_name }}" required>
            </div>

            <div class="form-group">
                <label>Book Author:</label>
                <input type="text" name="bAuthor" value="{{ $item->book_author }}" required>
            </div>

            <div class="form-group">
                <label>Book Stock:</label>
                <input type="text" name="bStock" value="{{ $item->book_stock }}" required>
            </div>

            <div class="form-group">
                <label>Book Date:</label>
                <input type="date" name="bDate" value="{{ $item->book_date }}" required>
            </div>

            <button type="submit" class="btn-submit">Update</button>
        </form>

        <a href="/books" class="btn-back">Back</a>
    </div>
</div>

</body>
</html>