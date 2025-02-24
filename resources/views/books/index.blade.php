@extends('layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <h1 class=" mt-4">Quản Lí Sách</h1>
    <div class="text-end mb-3">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Thêm Sách Mới</a>
    </div>
        <!-- Form lọc sách -->
    <!-- Form lọc sách -->
    <form action="{{ route('books.index') }}" method="GET" class="d-flex">
        <input type="text" name="title" class="form-control me-2" placeholder="Tìm theo tiêu đề" value="{{ request('title') }}">
        <input type="text" name="author" class="form-control me-2" placeholder="Tìm theo tác giả" value="{{ request('author') }}">
        <input type="number" name="published_year" class="form-control me-2" placeholder="Năm xuất bản" value="{{ request('published_year') }}">

    <!-- Dropdown chọn danh mục -->
        <select name="category_id" class="form-control me-2">
            <option value="">Tất cả danh mục</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-secondary">Lọc</button>
    </form>

    <div class="mb-4"></div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Tiêu Đề</th>
                <th>Tác Giả</th>
                <th>Năm Xuất Bản</th>
                <th>Số lượng</th>
                <th>Mô Tả</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>{{ $book->number }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <div class="d-grid gap-2">
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm w-100">Chỉnh Sửa</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
