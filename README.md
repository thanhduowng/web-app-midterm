# Book Management System

## Giới thiệu
Book Management System là một ứng dụng web giúp quản lý sách hiệu quả. Ứng dụng hỗ trợ thêm, sửa, xóa, lọc sách, cũng như thống kê số lượng đầu sách theo danh mục.

## Công nghệ sử dụng
- **Backend:** PHP Laravel
- **Frontend:** Bootstrap
- **Cơ sở dữ liệu:** MySQL
- **Server-side Processing:** Node.js

## Chức năng chính
- **Quản lý sách:** Thêm, sửa, xóa sách.
- **Tìm kiếm & Lọc:** Lọc sách theo danh mục, tiêu đề, tác giả.
- **Thống kê:** Hiển thị số lượng đầu sách theo từng danh mục.

## Hướng dẫn cài đặt
### 1. Yêu cầu hệ thống
- PHP >= 8.0
- Composer
- MySQL
- Node.js & npm

### 2. Cài đặt
#### Bước 1: Clone repository
```sh
git clone <repository_url>
cd book-management-system
```

#### Bước 2: Cài đặt dependencies
```sh
composer install
npm install
```

#### Bước 3: Cấu hình môi trường
Sao chép file `.env.example` và đổi tên thành `.env`, sau đó cập nhật thông tin database:
```sh
cp .env.example .env
```
Chỉnh sửa `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_management
DB_USERNAME=root
DB_PASSWORD=
```

#### Bước 4: Tạo database & migrate
```sh
php artisan migrate --seed
```

#### Bước 5: Chạy ứng dụng
```sh
php artisan serve
```
Sau đó truy cập `http://127.0.0.1:8000` để sử dụng ứng dụng.

## Cách sử dụng
- Truy cập giao diện quản lý sách.
- Thêm, sửa hoặc xóa sách theo nhu cầu.
- Sử dụng bộ lọc để tìm kiếm sách nhanh chóng.
- Xem thống kê sách theo danh mục.

## Đóng góp
Nếu bạn muốn đóng góp cho dự án, hãy tạo pull request hoặc mở issue trên GitHub.

## Liên hệ
- **Tác giả:** [Vũ Thành Dương]
- **Email:** [duongw.vuthanh@gmail.com]

---
Cảm ơn bạn đã sử dụng Book Management System! 📚
