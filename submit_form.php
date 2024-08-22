<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
// Kiểm tra nếu yêu cầu đến là POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ biểu mẫu
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Hiển thị thông tin đã nhận được
    echo "<h2>Thông tin bạn đã gửi:</h2>";
    echo "Họ và tên: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Số điện thoại: " . $phone . "<br>";
    echo "Chủ đề: " . $subject . "<br>";
    echo "Tin nhắn: " . $message . "<br>";
} else {
    // Hiển thị thông báo nếu yêu cầu không phải là POST
    echo "Yêu cầu không hợp lệ.";
}
?>
