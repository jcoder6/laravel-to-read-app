<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {
        $books = Book::orderBy('is_readed', 'asc')->orderBy('created_at', 'desc')->get();
        return view('books.index', compact('books'));
    }

    public function create() {
        $books = Book::orderBy('is_readed', 'asc')->orderBy('created_at', 'desc')->get();
        return view('books.create_book', compact('books'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'is_read' => 'required',
        ]);

        $data = [
            'book_title' => $request->title,
            'book_author' => $request->author,
            'is_readed' => $request->is_read == 'no' ? 0 : 1
        ];


        Book::create($data);

        return redirect('books')->with('success', 'Book Added');

    }

    public function edit(int $id) {
        $book = Book::findOrFail($id);
        $books = Book::orderBy('is_readed', 'asc')->orderBy('created_at', 'desc')->get();

        $data = [
            'book' => $book,
            'books' => $books
        ];

        return view('books.edit_book', $data);
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'is_read' => 'sometimes',
        ]);

        $data = [
            'book_title' => $request->title,
            'book_author' => $request->author,
            'is_readed' => $request->is_read == 'no' ? 0 : 1
        ];

        Book::findOrFail($id)->update($data);

        return redirect('books')->with('success', 'Book Updated');
    }

    public function confirmDelete(int $id){
        $books = Book::orderBy('is_readed', 'asc')->orderBy('created_at', 'desc')->get();
        $book = Book::findOrFail($id);

        $data = [
            'books' => $books,
            'book' => $book
        ];

        return view('books.delete_book', $data);
    }

    public function delete(int $id) {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('books')->with('danger', 'Book Deleted');

    }
}
