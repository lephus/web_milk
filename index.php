<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>L.H.Phú - N.T.Thanh (18ct1)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
        .text {
        color: #fff;
        position: absolute;
        top: 10px
        }
        .big{
        background-color: rgba(0,0,0,0.6);
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0px;
        left: 0px;
        display: none;
        justify-content: center;
        align-items: center;

        }
        .color-top{
            background-color: #ff9900;
            width: 100%;
            height: 70px;
            border-top-right-radius:  30px;
            border-top-left-radius:  30px;
        }
        .topic{
            width: 100%;
            height: 100%;
            text-align: center;
            font-size: 35px;
            cursor: pointer;
            line-height: 70px;
        }

        .container-login{
            width: 100%;
            margin: auto;
        }
        .small{
            width: 500px;
            height: 500px;
            background-image: url(img/login.jpg);
            border-radius: 30px;
            text-align: center;
            margin-bottom: : 100px;
        }
        .btn-login{
            background-color: #ff6600;
            border: none;
            cursor: pointer;
        }

        .small #close-login{
            cursor: pointer;
            width: 50px;
            height: 50px;
            margin-top: 5px;
            border-radius: 30px;
            position: absolute;
            right: 430px;
            top: 78px;
        }
        .table-login{
            font-size: 20px;
            width: 80%;
            margin: auto;
            margin-top: 40px;
        }
        .input-login{
            font-size: 20px;
            margin-bottom: 20px;
        }
        .button-loginn{
            width: 150px;
             cursor: pointer;
            height: 50px;
            margin-top: 10px;
            border-radius: 30px;
            background-color: #ff9900;
        }
        .button-create{
            width: 150px;
            height: 50px;
            margin-top: 20px;
          
            border-radius: 30px;
        }
        #btn-view-square{
            width: 300px;
            height: 50px;
            border-radius: 30px;
            margin-left: 50px;
        }
        .view-square{
            width: 80%;
            position: absolute;
            top: 120px;
            left: 135px;
        /*  justify-content: center;
            align-items: center; */
            background-color: blue;
            border-radius: 30px;
        }
        .o-san-pham{
            width: 250px;
            height: 280px;
            background-color: white;
            float: left;
            margin-left: 85px;
            margin-top: 33px;
            margin-bottom: 33px;
        }
        .photo{
            width: 200px;
            height: 200px;
            border-radius: 30px;
        }
        .photo-chi-tiet{
            width: 300px;
            height: 300px;
            border-radius: 30px;
            float: left;
        }
        .chi-tiet-sp-big{
            /* background-color: rgba(0, 0, 0, 0.6);*/ 
            width: 100%;
            height: 100vh;
            
            top: 0px;
            left: 0px;
            display: none;
            justify-content: center;
            align-items: center;
        }
        .chi-tiet-sp-small{
            width: 800px;
            height: 400px;
            background-color: cyan;
            border-radius: 30px;
            position: absolute;
            right: 150px;
            top: -20px;
        }
        .close-chi-tiet{
            width: 50px;
            height: 50px;
            margin-top: 10px;
            border-radius: 30px;
            position: absolute;
            right: 10px;
            top: 0px;
        }


        </style>
    
</head>
<body>


    <?php
        include ('connect.php');
        $sql_sanpham="select * from san_pham";
        $result_sanpham = mysqli_query($conn, $sql_sanpham);
        $sql_sanpham2="select * from san_pham";
        $result_sanpham2 = mysqli_query($conn, $sql_sanpham2);
        $sql_sanpham3="select * from san_pham";
        $result_sanpham3 = mysqli_query($conn, $sql_sanpham3);
    ?>
    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>TRANG CHỦ</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#services"><span>MỚI NHẤT</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>SẢN PHẨM</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#our-story"><span>CỬA HÀNG</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact-us"><span>LIÊN HỆ</span></a></li>
        </ul>
    </div>



    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1>P&T MILK</h1>
                <span>Rất Vui Được Phục Vụ Bạn !!!</span>
                <div class="primary-button">
                    <a style="color: blue;cursor: pointer;" id="btn-login" href="login.php">ĐĂNG NHẬP</a>
                </div>
            </div>
        </div>
    </div>


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>THÔNG TIN HOT NHẤT</h4>
                        <div class="line-dec"></div>
                        <p>các sản phẩm hot là các sản phẩm có số lượt quan tâm và đặt mua hàng nhiếu nhất tại websitle của cửa hàng P&T, các bạn có thể Liên hệ <a rel="nofollow" href="https://www.google.com/intl/vi/gmail/about/">Email: P&T@gmail.com</a> Theo dõi chúng tôi trên <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100009601411330">Facebook</a>
                        </p>
                        <ul>
                            <li>-  Chất Lượng Sản Phẩm Hàng Đầu</li>
                            <li>-  Gía Cả Phải Chăng</li>
                            <li>-  Tư Vấn Khách Hàng Miễn Phí</li>
                            <li>-  Hân Hạnh Được Phục Vụ</li>
                        </ul>
                        <div class="primary-button">
                            <a href="#portfolio">Xem Thêm Sản Phẩm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                     <?php
                        $dem = 0;
                        while($row = mysqli_fetch_assoc($result_sanpham)){
                            if($dem <= 1){
                                $dem ++;
                            ?>
                              <!-- san pham top -->
                                <div class="col-md-6">
                                    <div class="service-item">
                                        <h4><?php echo $row['Ten_SP']; ?></h4>
                                          <img src=<?php echo $row['Hinh_Anh']; ?>>
                                        <div class="line-dec"></div>
                                        <p><?php echo $row['Hang_SP']."</br>"." Đơn Gía: ". 
                                $row['Don_Gia'],"</br>"." Trọng Lượng: ".$row['Trong_Luong']; ?></p>
                                    </div>
                                </div>          
                            <?php
                            }
                        }   
                     
                    ?>
                    </div>
                </div>                
            </div>
        </div>
    </div>




    
    <div class="parallax-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                     <?php
                        while($row = mysqli_fetch_assoc($result_sanpham2)){
                            ?>
                            <div class="item">
                                <div class="testimonials-item">
                                    <a href=<?php echo $row['Hinh_Anh']; ?> data-lightbox="image-1"><img style="width: 350px;height: 300px;" src=<?php echo $row['Hinh_Anh'];?>></a>
                                    <div class="text-content">
                                        <h4 style="height: 50px;"><?php echo $row['Ten_SP']." - ". $row['Hang_SP']; ?></h4>
                                        <span><?php echo $row['Don_Gia']; ?><div class="primary-button">
                                             <a href="chi_tiet_sp.php?key=<?php echo $row['Id_KH']; ?>">Chi Tiết</a>
                                    </div></span>
                                    </div>
                                </div>
                            </div>    
                            <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




   <div class="service-content" id="services">
        <div class="container">
            <div class="row" >
                <?php
                while($row = mysqli_fetch_assoc($result_sanpham3)){ ?>
               
                    <div class="col-md-6">
                        <div class="service-item">
                            <h2><?php echo $row['Ten_SP']; ?></h2>
                                <img style="width: 300px;height: 300px;"src=<?php echo $row['Hinh_Anh']; ?>>
                                 <div class="line-dec"></div>
                                <p><?php echo $row['Hang_SP']."</br>"." Đơn Gía: ". 
                                $row['Don_Gia'],"</br>"." Trọng Lượng: ".$row['Trong_Luong']; ?></p>
                                <div class="primary-button">
                                   <a href="chi_tiet_sp.php?key=<?php echo $row['Id_KH']; ?>">Chi Tiết</a>
                                </div>
                        </div>
                    </div>          
                <?php
                }?>
            </div>
        </div>
    </div>




    <div class="tabs-content" id="our-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                      <div id="tab1">
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/S3MkwSDrm5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>tiếp thị nội dung (content marketing), đòi hỏi sự tham gia tích cực của người dùng và khuyến khích họ thực hiện tương tác[1][2]. Những tương tác này có thể đơn giản như nhấp chuột, thích, chia sẻ bài viết đến những hành động như tham gia khảo sát hoặc làm bài quiz, test tính cách[3],...
Để hiểu nội dung tương tác và lý do sử dụng chúng thì cần xem xét các thể loại và phương tiện khác nhau. Bất cứ điều gì đòi hỏi sự tham gia tích cực của người dùng đều có thể được phân loại thành nội dung tương tác.
                        </p>
                      </div>
                      <div id="tab2">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/Nq_bHbyh2U4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <!--  <img src="img/2nd-tab.jpg" alt=""> -->
                        <p>SÁNG DA. Nhiều người nhà có điều kiện, như nữ hoàng Cleopatra, đã tắm bằng sữa để có làn da luôn mềm và sáng. ...
                        XƯƠNG VÀ RĂNG CHẮC KHOẺ Nhắc đến sữa ta nghĩ ngay đến Canxi, rất cần thiết cho xương. ...
                        CƠ BẮP. Sữa có chứa nhiều protein, giúp tái tạo cơ bắp. ...
                        GIẢM CÂN. ...
                        XẢ STRESS. ...
                        CƠ THỂ KHOẺ MẠNH</p>
                      </div>
                      <div id="tab3">
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/S3MkwSDrm5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>Hoạt động kinh doanh chính của công ty này bao gồm chế biến, sản xuất và mua bán sữa tươi, sữa đóng hộp, sữa bột, bột dinh dưỡng, sữa chua, sữa đặc, sữa đậu nành, thức uống giải khát và các sản phẩm từ sữa khác. Các mặt hàng của Vinamilk cũng được xuất khẩu sang một số quốc gia như Campuchia, Phillippines, Úc và một số nước Trung Đông. Doanh thu xuất khẩu chiếm 13% tổng doanh thu của công ty.[4] Năm 2011, Vinamilk mở rộng sản xuất, chuyển hướng sang phân khúc trái cây và rau củ. Không lâu sau phân khúc hàng mới, dòng sản phẩm đạt được thành công với 25% thị phần tại kênh bán lẻ tại siêu thị. Tháng 2 năm 2012, công ty mở rộng sản xuất sang mặt hàng nước trái cây dành cho trẻ em.</p>
                      </div>
                      <div id="tab4">
                        <img src="img/4th-tab.jpg" alt="">
                        <p>P&T hiện là doanh nghiệp hàng đầu của ngành công nghiệp chế biến sữa, hiện chiếm lĩnh 54,5% thị phần sữa nước, 40,6% thị phần sữa bột, 33,9% thị phần sữa chua uống, 84,5% thị phần sữa chua ăn và 79,7% thị phần sữa đặc trên toàn quốc. Ngoài việc phân phối mạnh trong nước với mạng lưới hơn 220.000 điểm bán hàng phủ đều 63 tỉnh thành, sản phẩm Vinamilk còn được xuất khẩu sang 43 quốc gia trên thế giới như Mỹ, Pháp, Canada, Ba Lan, Đức, Nhật Bản khu vực Trung Đông, Đông Nam Á... </p>
                      </div>
                    </section>
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                      <li><a href="#tab1" class="active">TRUYỀN THÔNG</a></li>
                      <li><a href="#tab2">SỨC KHỎE</a></li>
                      <li><a href="#tab3">QUY TRÌNH</a></li>
                      <li><a href="#tab4">P&T</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer>
        <div class="container" id="contact-us">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Lên Đầu Trang</a>
                    </div>
                    <ul>
                        <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#linkeddin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#google"><i class="fa fa-google"></i></a></li>
                    </ul>
                    <p>Lê hữu phú - Nguyễn Trọng thanh </br><a rel="nofollow noopener" href="https://www.facebook.com/lamnyminhdi"><u>P&T MILK</></a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
        $(document).ready(function(){
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {
            if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 500, function(){
           
                window.location.hash = hash;
              });
            } 
          });
        });
    </script>
</body>
</html>