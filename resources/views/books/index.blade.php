<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container">
        <h1>~Kinokuniya~</h1>

        <form action="/books123" method="POST" class="book-form">
            @csrf

            <div class="form-group">
                <label for="bName">Book Name:</label>
                <input type="text" id="name" name="bName">
            </div>

            <div class="form-group">
                <label for="bAuthor">Book Author:</label>
                <input type="text" id="author" name="bAuthor">
            </div>

            <div class="form-group">
                <label for="bStock">Book Stock:</label>
                <input type="number" id="stock" name="bStock">
            </div>

            <div class="form-group">
                <label for="bDate">Book Date:</label>
                <input type="date" id="date" name="bDate">
            </div>

            <button type="submit" class="btn-submit">Save</button>
        </form>

        <hr>

        <table class="book-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Stock</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->book_name }}</td>
                        <td>{{ $item->book_author }}</td>
                        <td>{{ $item->book_stock }}</td>
                        <td>{{ $item->book_date }}</td>
                        <td>
                            <a href="/books/{{ $item->id }}/edit">Edit</a>
                            <form action="/books/{{ $item->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>