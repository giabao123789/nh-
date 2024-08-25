<?php
$host = 'localhost';
$name = 'root';
$password ='';
$dbname = 'data nha hàng';
$conn = new mysqli($host,$name,$password,$dbname);
if ($conn -> connect_error){
    die("KẾT NỐI KHÔNG THÀNH CÔNG !".$conn -> connect_error);
}
?>