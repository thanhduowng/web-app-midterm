@extends('layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h1 class="mb-4 text-center">📊 Thống kê sách</h1>

    <div class="row justify-content-center">
        <!-- Tổng số sách -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm p-3 bg-light">
                <h5 class="fw-bold">📚 Tổng số sách</h5>
                <p class="display-6 fw-bold text-primary">{{ $totalBooks }}</p>
            </div>
        </div>

        <!-- Số lượng sách theo danh mục -->
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <table class="table table-hover text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>📌 Danh Mục</th>
                            <th>📖 Số Đầu Sách</th>
                            <th>📊 Tổng Số Lượng Sách</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booksByCategory as $category)
                            <tr>
                                <td class="fw-semibold">{{ $category->name }}</td>
                                <td class="text-primary fw-bold">{{ $category->books_count }}</td>
                                <td class="text-success fw-bold">{{ $category->books_sum_number ?? 0 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Nút quay lại danh sách sách -->
    <div class="text-center mt-4">
        <a href="{{ route('books.index') }}" class="btn btn-outline-primary px-4">📚 Quản lý sách</a>
    </div>
</div>
@endsection
