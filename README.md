# 📚 Book Management System

![Book Management System](https://via.placeholder.com/1000x300?text=Book+Management+System)

## 📝 Giới thiệu
Book Management System là một ứng dụng web giúp quản lý sách hiệu quả. Ứng dụng hỗ trợ **thêm, sửa, xóa, lọc sách**, cũng như **thống kê số lượng đầu sách theo danh mục**.

---

## 🚀 Công nghệ sử dụng

| Thành phần  | Công nghệ |
|-------------|-----------|
| Backend     | Laravel (PHP) |
| Frontend    | Bootstrap |
| Database    | MySQL |
| Server-side | Node.js |

---

## 🔥 Chức năng chính
✅ **Quản lý sách:** Thêm, sửa, xóa sách dễ dàng.  
✅ **Tìm kiếm & Lọc:** Lọc sách theo danh mục, tiêu đề, tác giả.  
✅ **Thống kê:** Hiển thị số lượng đầu sách theo từng danh mục.  

---

## ⚙️ Hướng dẫn cài đặt

### 🖥 Yêu cầu hệ thống
- PHP >= 8.1
- Composer
- MySQL
- Node.js & npm

### 🛠 Cài đặt
#### 1️⃣ Clone repository
```sh
git clone [<repository_url>](https://github.com/thanhduowng/web-app-midterm.git)
cd book-management
```

#### 2️⃣ Cài đặt dependencies
```sh
composer install
npm install
```

#### 3️⃣ Cấu hình môi trường
Sao chép file `.env.example` và đổi tên thành `.env`, sau đó cập nhật thông tin database:
```sh
cp .env.example .env
```
Chỉnh sửa `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

```

#### 4️⃣ Tạo database & migrate
```sh
php artisan migrate --seed
```

#### 5️⃣ Chạy ứng dụng
```sh
npm run build
npm run dev
php artisan serve
```
Sau đó truy cập **`http://127.0.0.1:8000`** để sử dụng ứng dụng.

---
## 🎯 Cách sử dụng
### 1️⃣ Đăng nhập
- Đăng ký tài khoản nếu chưa có.
- Đăng nhập để bắt đầu sử dụng hệ thống.
- ![Login]([https://example.com/path/to/image.jpg](https://drive.google.com/file/d/1XsLjWGUtekiPbm519HBKbEIyabfPXd13/view?usp=sharing))
- ![Register]([https://drive.google.com/file/d/119hQeYV7wnpLTwXTKwa1sVdLQpNQuxb-/view?usp=sharing))

### 2️⃣ Quản lý sách
- Nhấn **"Thêm sách"** để thêm sách mới.
- Nhấn **"Chỉnh sửa"** để chỉnh sửa thông tin sách.
- Nhấn **"Xóa"** để xóa sách.
- Nhập thông tin muốn lọc sách sau đó nhấn **"Lọc"** để lọc sách.

### 3️⃣ Dashboard
- Xem thống kê số lượng sách theo từng danh mục sách.

---


## 📬 Liên hệ
- **Tác giả:** [Vũ Thành Dương]  
- **Email:** [duongw.vuthanh@gmail.com]  

💖 Cảm ơn bạn đã sử dụng **Book Management**! 🚀

