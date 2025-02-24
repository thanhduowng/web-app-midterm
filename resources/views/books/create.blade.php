@extends('layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Thêm Sách Mới</h1>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="border p-4 rounded shadow bg-light">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-4 col-form-label fw-bold text-end">Tiêu Đề:</label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="author" class="col-sm-4 col-form-label fw-bold text-end">Tác Giả:</label>
                            <div class="col-sm-8">
                                <input type="text" name="author" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="published_year" class="col-sm-4 col-form-label fw-bold text-end">Năm Xuất Bản:</label>
                            <div class="col-sm-8">
                                <input type="number" name="published_year" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="number" class="col-sm-4 col-form-label fw-bold text-end">Số lượng:</label>
                            <div class="col-sm-8">
                                <input type="number" name="number" class="form-control" required>
                            </div>
                        </div>

                        <!-- Thêm dropdown chọn danh mục sách -->
                        <div class="mb-3 row">
                            <label for="category_id" class="col-sm-4 col-form-label fw-bold text-end">Danh Mục:</label>
                            <div class="col-sm-8">
                                <select name="category_id" class="form-control" required>
                                    <option value="">Chọn danh mục</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-sm-4 col-form-label fw-bold text-end">Mô Tả:</label>
                            <div class="col-sm-8">
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-4 me-2">
                                <i class="fas fa-plus me-2"></i>Thêm Sách
                            </button>
                            <a href="{{ route('books.index') }}" class="btn btn-secondary px-4">
                                <i class="fas fa-arrow-left me-2"></i>Quay Lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
