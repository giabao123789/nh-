<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ biểu mẫu
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Hiển thị thông tin đã nhận được
    echo "<h1>Thông tin bạn đã gửi:</h1>";
    echo "Họ và tên: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Số điện thoại: " . $phone . "<br>";
    echo "Chủ đề: " . $subject . "<br>";
    echo "Tin nhắn: " . $message . "<br>";

    $sql ="INSERT INTO `user` (`name`,`email`,`phone`,`subject`,`message`) VALUES('$name','$email','$phone','$subject','$message')";
    if($conn ->query($sql) === TRUE ){ 
        echo"<h1>CHÚNG TÔI SẼ LIÊN HỆ CHO BẠN TRONG VÒNG 24H ĐỂ TƯ VẤN NHÉ! XIN CẢM ƠN QUÝ KHÁCH!</h1>";
    }
    else {
        echo"Lỗi {$sql}".$connn -> error;
    }
} else {
    // Hiển thị thông báo nếu yêu cầu không phải là POST
    echo "Yêu cầu không hợp lệ.";
}
?>
<A href="code.html">QUAY LẠI TRANG CHỦ CALLARY</A>