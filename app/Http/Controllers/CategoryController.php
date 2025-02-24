<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create() {
        return view('categories.create');
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required|unique:categories']);
        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Danh mục đã được thêm');
    }

    public function edit(Category $category) {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $request->validate(['name' => 'required|unique:categories,name,' . $category->id]);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Danh mục đã được cập nhật');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Danh mục đã được xóa');
    }
}
