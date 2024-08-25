<?php
$servername = "localhost";  // Địa chỉ server MySQL (thường là localhost)
$username = "root";         // Tên đăng nhập MySQL (thường là root khi dùng XAMPP)
$password = "";             // Mật khẩu MySQL (thường để trống nếu dùng XAMPP)
$dbname = "data tu van";  // Tên cơ sở dữ liệu mà bạn muốn kết nối

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "";
}

// Lưu ý: Bạn có thể bỏ dòng echo "Kết nối thành công!"; nếu không muốn hiển thị thông báo này.
?>
