<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin:L.H.Phú - N.T.Thanh</title>
    <style type="text/css">
        body{
            background-image: url(img/milk.jpg);
        }
    </style>
</head>

<body>
    <?php
         if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
         }else{ 
             header("LOCATION:index.php");
         };
    ?>

    <?php
    include('connect.php');
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }

    $num_per_page = 5;
    $start_from = ($page - 1) * 5;
    $query = "select * from san_pham limit $start_from, $num_per_page";
    $total = mysqli_query($conn, $query);

    if (isset($_GET["page2"])) {
        $page2 = $_GET["page2"];
    } else {
        $page2 = 1;
    }

    $num_per_page2 = 5;
    $start_from2 = ($page2 - 1) * 5;
    $query2 = "select * from khach_hang limit $start_from2, $num_per_page2";
    $total2 = mysqli_query($conn, $query2);


     if (isset($_GET["page3"])) {
            $page3= $_GET["page3"];
        } else {
            $page3 = 1;
        }
    $num_per_page3 = 5;
    $start_from3 = ($page3 - 1) * 5;
    $query3 = "select * from hang_sua limit $start_from3, $num_per_page3";
    $total3 = mysqli_query($conn, $query3);

    $query_company = "select * from hang_sua";
    $rs_company = mysqli_query($conn, $query_company);
    // $query_custommer = "select * from khach_hang";
    // $rs_custommer = mysqli_query($conn, $query_custommer);
    ?>
    <div class="div_big">
        <div class="container">
            <div class="title">
                Sữa
            </div>
            <div class="bottom">
                <div class="left">
                    Thông Tin Sữa
                </div>
                <div class="right">
                    <a href="logout.php?logout" class="btn-log">Đăng Xuất</a>
                </div>
            </div>
            <form action="#" onsubmit="return false">
                <table class="content-table">
                    <thead>
                        <tr class="word">
                            <td>Số TT</td>
                            <td>Tên sữa</td>
                            <td>Hình Ảnh</td>
                            <td>Hãng sữa</td>
                           
                            <td>Loại sữa</td>
                            <td>Trọng lượng</td>
                            <td>Đơn giá</td>
                            <td>Hành Động</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                                $i = ($page - 1)* 5 + $i;      
                        ?>
                        <?php while ($rs= mysqli_fetch_array($total)) : ?>
                            <tr>
                                <td width=60px><?= $i++ ?> </td>
                                <td><?= $rs["Ten_SP"] ?> </td>
                                 <td> <img style="width: 70px; height: 70px;" src=<?= $rs["Hinh_Anh"] ?>> </td>
                                <td><?= $rs["Hang_SP"]?></td>
                             
                                <td>
                                    <?php echo $rs['Loai_SP']; ?>
                                </td>
                                <td>
                                    <?= $rs["Trong_Luong"] ?> 
                                </td>
                                <td><?= $rs["Don_Gia"] ?> </td>

                                <td width=330px>
                                    <a class="btn-action btn-action-view" href="admin.php?key=<?php echo $rs['Id_KH']; ?>">View</a>
                                    <a class="btn-action" href="edit.php?key_edit_product=<?php echo $rs['Id_KH']; ?>">Edit</a>
                                    <a class="btn-action" onclick="return delete_sp()" href="function_delete.php?key_product=<?php echo $rs['Id_KH']; ?>">Delete</a>
                                </td>

                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                <div class="admin_footer">
                    <div class="left">
                        <?php
                        $pr_query = "select * from san_pham";
                        $pr_res = mysqli_query($conn, $pr_query);
                        $total_record = mysqli_num_rows($pr_res);

                        $total_page = ceil($total_record / $num_per_page);
                        for ($i = 1; $i <= $total_page; $i++) {
                            echo "<a class='me' href='admin.php?page=" . $i . "'>$i</a>";
                        }
                        ?>
                    </div>
                    <div class="right">
                        <a href="add.php" class="btn-add">Add</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="div_big">
        <div class="container">
            <div class="title">
                Khách Hàng
            </div>
            <div class="bottom">
                <div class="left">
                    Thông Tin khách hàng
                </div>
                <div class="right">
                </div>
            </div>
            <form action="#" role="form">
                <table class="content-table">
                    <thead>
                        <tr class="word">
                            <td>Mã KH</td>
                            <td>Tên khách hàng</td>
                            <td>Giới tính</td>
                            <td>Địa chỉ</td>
                            <td>Số điện thoại</td>
                            <td>Email</td>
                            <td>Hành Động</td>
                        </tr>
                    </thead>
                    <tbody>
                          <?php $i = 1;
                                $i = ($page2 - 1)* 5 + $i;      
                        ?>
                        <?php while ($row_custommer = mysqli_fetch_array($total2)) : ?>
                             <tr>
                                <td><?php echo $row_custommer["Ma_KH"] ?> </td>
                                <td><?php echo $row_custommer["Ten_KH"] ?> </td>
                                <td>
                                    <?php echo $row_custommer["Gioi_Tinh"]?> </td>
                                <td><?php echo $row_custommer["Dia_Chi"] ?> </td>
                                <td><?php echo $row_custommer["SDT"] ?> </td>
                                <td><?php echo $row_custommer["Gmail"] ?> </td>
                                <td>
                                    <a class="btn-action" href="edit_custommer.php?key_custommer=<?php echo $row_custommer['Id_KH'] ?>">Edit</a>
                                    <a class="btn-action" onclick="return delete_cus()" href="function_delete.php?key_custommer=<?php echo $row_custommer['Id_KH'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                <div class="admin_footer">
                       <div class="left">
                        <?php
                        $pr_query = "select * from khach_hang";
                        $pr_res = mysqli_query($conn, $pr_query);
                        $total_record2 = mysqli_num_rows($pr_res);

                        $total_page2 = ceil($total_record2 / $num_per_page2);
                        for ($i = 1; $i <= $total_page2; $i++) {
                            echo "<a class='me' href='admin.php?page2=" . $i . "'>$i</a>";
                        }
                        ?>
                    </div>
                    <div class="right">
                        <a href="add_custommer.php" class="btn-add">Add</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="div_big">
        <div class="container">
            <div class="title">
                Hãng Sữa
            </div>
            <div class="bottom">
                <div class="left">
                    Thông tin Hãng Sữa
                </div>
            </div>
            <form action="#" role="form">
                <table class="content-table">
                    <thead>
                        <tr class="word">
                            <td>Mã HS</td>
                            <td>Tên hãng sữa</td>
                            <td>Địa chỉ</td>
                            <td>Điện thoại</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1;
                                $i = ($page3 - 1)* 5 + $i;      
                        ?>
                        <?php while ($row_company = mysqli_fetch_array($total3)) : ?>
                              <tr>
                                <td><?php echo $row_company["Ma_HS"] ?> </td>
                                <td><?php echo $row_company["Ten_HS"] ?> </td>
                                <td><?php echo $row_company["Dia_Chi"] ?> </td>
                                <td><?php echo $row_company["Dien_Thoai"] ?> </td>
                                <td><?php echo $row_company["Gmail"] ?> </td>
                                <td>
                                    <a class="btn-action" href="edit_company.php?key_company=<?php echo $row_company["Id_HS"] ?>">Edit</a>
                                    <a class="btn-action" onclick="return delete_pa()" href="function_delete.php?key_company=<?php echo $row_company["Ma_HS"] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                <div class="admin_footer">
                     <div class="left">
                        <?php
                        $pr_query = "select * from hang_sua";
                        $pr_res = mysqli_query($conn, $pr_query);
                        $total_record3 = mysqli_num_rows($pr_res);

                        $total_page3 = ceil($total_record3 / $num_per_page3);
                        for ($i = 1; $i <= $total_page3; $i++) {
                            echo "<a class='me' href='admin.php?page3=" . $i . "'>$i</a>";
                        }
                        ?>
                    </div>
                    <div class="right">
                        <a href="add_company.php" class="btn-add">Add</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_GET['key'])) {
        $key            = $_GET['key'];
        $query_choose   = "select * from san_pham where Id_KH = '" . $key . "'";
        $res_choose     = mysqli_query($conn, $query_choose);
        $pro            = mysqli_fetch_assoc($res_choose) ?? [];
       
    }
    
    ?> 

    <div class="bg_modal" style="display : <?= empty($pro) ? 'none' : 'flex' ?>">
        <div class="modal_content">
            <div class="modal_content_top">
                <div class="top_left">
                    <?= $pro['Ten_SP']  ?? '' ?>
                </div>
                <div class="top_right" id="close">
                    <a href="admin.php">X</a>
                </div>
            </div>
            <div class="modal_content_bottom">
                <div class="bottom_left">
                    <img class="image_product" src=<?php echo$pro['Hinh_Anh'] ?> alt="milk">
                </div>
                <div class="bottom_right" style="margin-left: 10px;margin-right: 10px;">
                    <div class="company_product" style="margin-top: 10px;">
                        <h3><?= $pro['Hang_SP']  ?? '' ?></h3>
                    </div>
                    <div class="type_product" style="margin-top: 10px;">
                       <i><?= $pro['Loai_SP']  ?? '' ?> </i>
                    </div>
                    <div class="weight_product" style="margin-top: 10px;">
                        <b style="color: #ff6600;"> Trọng lượng: </b> <?= $pro['Trong_Luong']." mg"  ?? '' ?>
                    </div>
                    <div class="price_product" style="margin-top: 10px;">
                        <b style="color: #ff6600;"> Đơn Gía: </b> <?= $pro['Don_Gia']." VND"  ?? '' ?>
                    </div>
                    <div class="tpdd_product" style="margin-top: 10px;">
                         <b style="color: #ff6600;"> Thành Phần: </b><?= $pro['Thanh_Phan']  ?? '' ?>
                    </div>
                    <div class="benefit_product" style="margin-top: 10px;">
                         <b style="color: #ff6600;"> Lợi ích: </b>: <?= $pro['Loi_Ich']  ?? '' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        document.querySelector('#close').addEventListener("click", function() { 
            document.querySelector(".bg_modal").style.display = "none";
        })
        document.querySelector('#close_delete').addEventListener("click", function() { 
            document.querySelector(".bg_modal_delete").style.display = "none";
        })

        function delete_sp(){
            return confirm('Bạn Chắc Chắc muốn Xóa ?');
        }

        function delete_cus(){
            return confirm('Bạn Chắc Chắc muốn Xóa ?');
        }
        
        function delete_pa(){
            return confirm('Nếu Xóa Hãng Sữa, các Sản Phẩm Liên quan đến hãng sữa nãy cũng sẽ bị xóa theo, bạn có đồng ý ?');
        }
    </script>
</body>

</html>