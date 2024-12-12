<?php
include 'db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password']; //  mật khẩu
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Chuẩn bị câu lệnh SQL
    $sql = "INSERT INTO users (fullname, username, password, email, gender, address) VALUES (?, ?, ?, ?, ?, ?)";

    // Sử dụng Prepared Statement để bảo mật
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fullname, $username, $password, $email, $gender, $address);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        // Đăng ký thành công, chuyển hướng tới trang 
        header("Location: /my-website-form/login.php"); 
        exit(); // Đảm bảo không thực hiện bất kỳ mã nào khác sau header
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>
