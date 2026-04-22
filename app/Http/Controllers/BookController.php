<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();

        return view('books.index', [
            'items' => $books
        ]);
    }

    public function store(Request $request)
    {
        Books::create([
            'book_name' => $request->bName,
            'book_author' => $request->bAuthor,
            'book_stock' => $request->bStock,
            'book_date' => $request->bDate
        ]);

        return redirect('/books');
    }

    public function edit($id)
    {
        $book = Books::findOrFail($id);

        return view('books.edit', [
            'item' => $book
        ]);
    }

    public function update(Request $request, $id)
    {
        $book = Books::findOrFail($id);

        $book->update([
            'book_name' => $request->bName,
            'book_author' => $request->bAuthor,
            'book_stock' => $request->bStock,
            'book_date' => $request->bDate
        ]);

        return redirect('/books');
    }

    public function destroy($id)
    {
        $book = Books::findOrFail($id);

        $book->delete();

        return redirect('/books');
    }
}
