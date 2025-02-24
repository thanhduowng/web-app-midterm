<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function create() {
        return view('books.create');
    }
    public function index(Request $request)
    {
        $query = Book::query();

        // Kiểm tra nếu có input từ form và áp dụng bộ lọc
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }
    
        if ($request->filled('author')) {
            $query->where('author', 'like', '%' . $request->author . '%');
        }
    
        if ($request->filled('published_year')) {
            $query->where('published_year', $request->published_year);
        }
    
        // Lấy danh sách sách đã lọc
        $books = $query->get();
    
        return view('books.index', compact('books'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer',
            'number' => 'required|integer',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Sách đã được thêm thành công.');
    }
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer',
            'number' => 'required|integer',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Sách đã được cập nhật thành công.');
    }
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
                         ->with('success', 'Sách đã được xóa thành công.');
    }
}
