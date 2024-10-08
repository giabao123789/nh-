<!DOCTYPE html>
<html>
<head>
    <title>Callary</title>
    <meta charsset="utf-8"> 
    <link rel="stylesheet" href="code.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="submit_form.php">

</head>
<body> 

<div class="app">
    <header class="header"> 
        <nav class="header_navbar">
            <ul class="header_navbar-list">
                <a href="http://127.0.0.1:5500/code.html"><li class="header_navbar-item header_navbar-item-logo">CALLARY WEDDING AND EVENT</li></a>
            </ul>
            <ul class="header_navbar-list">
                <li class="header_navbar-item">
                    <a href="#" class="header_navbar-item-link header_navbar-item-link-dt"><i class="icon fas fa-phone"></i>(+84) 123 456 </a>
                </li>
                <li class="header_navbar-item">
                    <a href="#" class="header_navbar-item-link header_navbar-item-link-mail"><i class="icon fas fa-mail-bulk"></i>event@callary.vn</a>
                </li>
                <li class="header_navbar-item"><i class="icon fab fa-facebook"></i></i>Fanpage</li>
            </ul>
        </nav>
     </header>
    <div class="header_navbar-item header_navbar-item-logo1"><img class="logomini" src="logo (1).png"></div>
     <div class="container"> 
      <a href="http://127.0.0.1:5500/code.html"> <img class="hinhlogo" src="logo-big-shadow-1.png" loading="lazy"></a>
        <nav class="danhmuc">
            <ul class="danhsach">
                <li class="sanpham">
                    <a href="#" class="link_san_pham">Sảnh cưới</a>
                </li>
                <li class="sanpham">
                    <a href="http://127.0.0.1:5500/trangtri.html" class="link_san_pham">Trang trí</a>
                </li>
                <li class="sanpham">
                    <a href="#" class="link_san_pham">Thực đơn</a>
                </li>
                <li class="sanpham">
                    <a href="hlhtv.html" class="link_san_pham">Liên hệ tư vấn</a>
                </li>
            </ul>
        </nav>
     </div>
    <main>
        <div class="trangchinh">
            <div class="video-container">
                <video autoplay muted loop>
                    <source src="clip.mp4" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ thẻ video.
                </video>
                <div class="video-overlay">
                    <h1 class="video-text">Callary</h1>
                    
                </div>

            </div>
            </div>
    </div>
        
        
    </main>

        






     

    
</div>
</body> <div class="gioithieu">
             <div class="about">
                <h1 class="chu">Giới thiệu</h1>
                <h2 class="title">Calla – Không gian tiệc xanh – Sảnh cưới đẹp khiết gắn kết những tâm hồn</h2>
                <p class="a">Giữa lòng Sài Gòn chật chội, người ta vẫn luôn tìm kiếm cho mình một chốn thanh mát, nhẹ nhàng. Đó sẽ là một không gian mát mẻ, yên tĩnh và bình yên chỉ dành riêng cho bản thân. Và có thể, ngay trong ngày trọng đại, những cặp đôi yêu thiên nhiên cũng mong muốn được <b>tổ chức tiệc cưới</b> giữa một không gian đặc trưng như thế.</p> 
                
                <p>Với tư cách là một trong những đơn vị tổ chức tiệc uy tín ở Thành phố Hồ Chí Minh, <b>Callary</b> tự hào rằng chúng tôi có thể tạo ra một không gian cưới phù hợp với yêu cầu của bạn nhất. </p>
                <div class="slide">
                    <div class="anh1_1"><img id="anh1" src="images_1/0.JPG" /></div>
                    <div class="chunghieng"><p><i>Một số hình ảnh về Callary</i></p></div>
                    <div class="btn_container">
                        <button onclick="first()"> << </button>
                        <button onclick="prev()"> < </button>
                        <button onclick="next()"> > </button>
                        <button onclick="last()"> >> </button>
                    </div>
                </div>
                    <script>
                        var images_1 = [];
                            var index = 2; // vị trí ảnh đang hiển thị
                            var sohinh = 3;
                            for (var i = 0; i < sohinh; i++) {
                            images_1[i] = new Image();
                            images_1[i].src = "images_1/" + i + ".jpg"; }
                    </script>
                    <script>
                    function updateImage() {
                        var anh1 = document.getElementById("anh1");
                        anh1.classList.remove('active'); // Loại bỏ lớp active trước đó
                        setTimeout(function() { // Đợi ảnh cũ mờ đi, sau đó đổi ảnh
                            anh1.src = images_1[index].src;
                            anh1.classList.add('active'); // Thêm lớp active để làm ảnh mới xuất hiện
                        }, 100); // Độ trễ nhỏ để có hiệu ứng mượt hơn
                    }
                    </script>
                    <script>
                        function first(){
                            index = 0;
                            var anh1 = document.getElementById("anh1");
                            anh1.src = images_1[index].src;
                }
                        function last(){
                            index = images_1.length - 1;
                            var anh1 = document.getElementById("anh1");
                            anh1.src = images_1[index].src;;
                }
                        function next(){
                
                            index++;
                            if(index >= images_1.length) index = 0;
                            var anh1 = document.getElementById("anh1");
                            anh1.src = images_1[index].src;
                }
                        function prev(){
                            index--;
                            if(index < 0) index = images_1.length - 1; 
                            var anh1 = document.getElementById("anh1");
                            anh1.src = images_1[index].src;
                }
                
                    </script>
                    <script>
                        function autoSlide() {
                    setInterval(next, 3000);} // Gọi hàm next() sau mỗi 4 giây
        // Bắt đầu tự động slideshow khi trang tải xong
        window.onload = autoSlide;
                    </script>

                    <div class="khoanhkhac">
                        <img class="polaroi" height="800px" width="800px" src="pngtree-polaroid-frame-with-pastel-color-and-love-theme-png-image_6868562.png">
                        <div class="dsanhcuoi">
                            <img class="hinhcuoi"  src="tải xuống (1).jpg">
                            <img class="hinhcuoi"  src="tải xuống (2).jpg" >
                            <img class="hinhcuoi"  src="images (2).jpg" >
                        </div>
                        <div class="dsanhcuoi1">
                            <img class="hinhcuoi1"  src="tải xuống (5).jpg">
                            <img class="hinhcuoi1"  src="tải xuống (3).jpg" >
                            <img class="hinhcuoi1"  src="tải xuống (4).jpg" >
                        </div>
                    </div>
                
            
            <div class="uudai">
                <h1 class="chu">Ưu Đãi</h1>
                <p class="a">Ở Callary, Chất lượng cũng như dịch vụ đều là phương châm hoạt động hàng đầu, và mỗi thời điểm chúng tôi đều có những ưu đãi tốt nhất cho sự kiện của bạn.</p>
                <hr>
                <div class="haihinh">
                    <img class="hinhuudai"  src="img6.jpg">
                    <img class="hinhuudai" src="Magical-Wedding_Ngang.jpg">
                </div>
                <div class="haihinh">
                    <img class="hinhuudai" src="img5.jpg">
                    <img class="hinhuudai" src="z5427866492932_20c19482f9f1f9f4779b199673fcf7b2.jpg">
                </div>

            </div>
           
        </div>
        
        
<footer class="footer">
    <div class="chantrang">
        <div class="thongtinlienhe">
            <img class="logo" src="logo (2).png">
            <div class="diachi-sdt">
                <h3 class="lienhe">LIÊN HỆ</h3>
                <ul class="thongtin">
                    <li class="dc">
                        <img class="bando" src="Ảnh chụp màn hình 2024-08-10 180924.png">
                        <a href="https://www.google.com/maps/dir//70+%C4%90.+T%C3%B4+K%C3%BD,+T%C3%A2n+Ch%C3%A1nh+Hi%E1%BB%87p,+Qu%E1%BA%ADn+12,+H%E1%BB%93+Ch%C3%AD+Minh/@10.8657345,106.535716,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31752b2a11844fb9:0xbed3d5f0a6d6e0fe!2m2!1d106.6181025!2d10.8657413?entry=ttu" class="linkdc">70 Đ. Tô Ký, Tân Chánh Hiệp, Quận 12, Hồ Chí Minh</a></li>
                    <br>
                        <li class="sdt">
                        <a href="tel:(+84 28) 38 43 5556" class="linksdt"><i class="icon fas fa-phone"></i>Hotline:(+84) 123 456</a></li>
                    <br>
                        <li class="email">
                        <a href="mailto:event@Callary.vn" class="linkemail"><i class="icon fas fa-mail-bulk"></i>Email:event@callary.vn</a></li>
                </ul>
            <br>
            <p>HỌ VÀ TÊN-MSSV:VÕ THÀNH ĐẠT-2251120285</p>
            <p>HỌ VÀ TÊN-MSSV:TRẦN GIA BẢO-2251120271</p>
            </div>
        </div>
        <p class="inhoa">TRUNG TÂM TIỆC CƯỚI VÀ HỘI NGHỊ CALLARY</p>
        <div class="end">
            <div class="chuc-clr">
                <img class="chuc" src="Ảnh chụp màn hình 2024-08-12 005138.png">
                <p class="callary">2024 Callary </p>
            </div>
            <div class="icong">
                <a href="fb" class="linkfb"><i class="icong fab fa-facebook 1"></i></a>
                <a href="ig" class="linkig"><i class="icong fab fa-instagram 1"></i></a>
                <a href="x" class="linkx"><i class="icong fab fa-twitter 1"></i></a>
            </div>
        </div>





    </div>



</footer>

</html>