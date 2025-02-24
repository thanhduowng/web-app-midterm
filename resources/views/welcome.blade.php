<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f3e7e9, #e3eeff);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: #444;
    }
    .welcome-container {
      text-align: center;
      background: rgba(255, 255, 255, 0.5);
      padding: 40px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      backdrop-filter: blur(15px);
    }
    .btn-custom {
      background-color: #ff8a80;
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 12px 24px;
      margin: 10px;
      font-size: 1.2rem;
      text-transform: none;
      font-weight: normal;
      transition: all 0.3s ease-in-out;
    }
    .btn-custom:hover {
      background-color: #ff5252;
      transform: translateY(-3px);
      box-shadow: 0 4px 12px rgba(255, 82, 82, 0.3);
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <h1>Welcome to BookManagement</h1>
    <div>
      <a class="btn btn-custom" href="{{ url('/login') }}">Đăng nhập</a>
      <a class="btn btn-custom" href="{{ url('/register') }}">Đăng ký</a>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
