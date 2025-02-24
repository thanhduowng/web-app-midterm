<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
class BookController extends Controller
{
    //
    public function create() {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }
    public function index(Request $request)
    {
        $categories = Category::all();
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
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        
        // Lấy danh sách sách đã lọc
        $books = $query->get();
    
        return view('books.index', compact('books', 'categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer',
            'number' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Sách đã được thêm thành công.');
    }
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer',
            'number' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
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
