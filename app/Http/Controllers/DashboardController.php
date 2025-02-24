<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book; 
class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalBooks = Book::sum('number');

        // 🟢 Thống kê số đầu sách và tổng số lượng sách theo danh mục
        $booksByCategory = Category::withCount('books')
            ->withSum('books', 'number')
            ->get();
        return view('dashboard', compact('totalBooks', 'booksByCategory'));
    }
}
