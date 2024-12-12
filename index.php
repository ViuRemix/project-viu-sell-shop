<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký Tài Khoản</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" action="reg.php">
            <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
            <label for="fullname">Họ và tên:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="gender">Giới tính:</label>
            <input type="radio" id="male" name="gender" value="Nam" required> Nam
            <input type="radio" id="female" name="gender" value="Nữ" required> Nữ

            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" required>
            <p>Đã có tài khoản? <a href="/my-website-form/login.php">Đăng nhập</a></p>
            <input type="submit" name="btn-reg" value="Đăng ký">
        </form>
    </div>
</body>
</html>
