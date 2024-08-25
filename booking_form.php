<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require 'connect1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ biểu mẫu
    $namegroom = htmlspecialchars($_POST['namegroom']);
    $namebride = htmlspecialchars($_POST['namebride']);
    $weddingDate = htmlspecialchars($_POST['weddingDate']);
    $guests = htmlspecialchars($_POST['guests']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Hiển thị thông tin đã nhận được
    echo "<h1>Thông tin bạn đã gửi:</h1>";
    echo "Họ và tên chú rể: " . $namegroom . "<br>";
    echo "Họ và tên cô dâu: " . $namebride . "<br>";
    echo "Ngày cưới: " . $weddingDate . "<br>";
    echo "Số lượng khách: " . $guests . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Số điện thoại: " . $phone . "<br>";
    echo "Chủ đề: " . $subject . "<br>";
    echo "Tin nhắn: " . $message . "<br>";

    echo "<h1>CHÚNG TÔI ĐÃ NHẬN ĐƯỢC LỊCH CƯỚI CỦA BẠN</h1>";

    // Chuẩn bị câu truy vấn SQL
    $sql = "INSERT INTO `user` (`namegroom`, `namebride`, `weddingDate`, `guests`, `email`, `phone`, `subject`, `message`) 
            VALUES ('$namegroom', '$namebride', '$weddingDate', '$guests', '$email', '$phone', '$subject', '$message')";

    // Thực hiện câu truy vấn SQL
    if (mysqli_query($conn, $sql)) {
        echo "Đặt lịch cưới thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>
<a href="code.html">QUAY LẠI TRANG CHỦ CALLARY</a>
