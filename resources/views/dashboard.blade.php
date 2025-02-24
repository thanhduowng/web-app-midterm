<x-app-layout >
    <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="text-center bg-white p-5 rounded shadow">
        <h2 class="text-primary">Thống kê sách</h2>
        <p class="fs-4 mt-3">Tổng số sách trong hệ thống: </p>
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Quay lại</a>
    </div>
</body>
</html>

</x-app-layout>