<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleadd_company.css">
	<title>Update hãng sữa</title>
</head>
<body>
<?php
	include('connect.php');
	$key_company =  $_GET['key_company'];
	$sql_company = "select * from hang_sua where Id_HS = '$key_company'";
	$res_company = mysqli_query($conn, $sql_company);
	$row_up = mysqli_fetch_assoc($res_company);
	if(isset($_POST['btnSubmitPa'])){
		$code = $_POST['txtCode'];
		$name = $_POST['txtName'];
		$address = $_POST['txtAddress'];
		$phone = $_POST['txtPhone'];
		$email = $_POST['txtEmail'];
		$sql = "update hang_sua set Ma_HS = '$code', Ten_HS = '$name', Dia_Chi = '$address', Dien_Thoai = '$phone', Gmail = '$email'  where Id_HS = '$key_company' ";
		$res = mysqli_query($conn, $sql);
		if($res){
			header("location:admin.php");
		}
	}
?>
<?php
	$key_product = $_GET['key_product'];
	$sql_product = "delete from san_pham where Id_KH = '$key_product'";
	$res_product = mysqli_query($conn, $sql_product);
	if($res_product){
		header("location:admin.php");	
	}
	
	$key_custommer = $_GET['key_custommer'];
	$sql_custommer = "delete from khach_hang where Id_KH = '$key_custommer'";
	$res_custommer = mysqli_query($conn, $sql_custommer);
	if($res_custommer){
		 header("location:admin.php");	
	}

	
?>

<div class="container">
	<div class="title">
            MILK
        </div>
        <div class="mid">
            <div class="left">
                Delete Company Milk
			</div>
			<div class="right">
				<a href="admin.php">Back</a>
			</div>
        </div>
		<div class="bottom">
				<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Mã Hãng Sữa</td>
							<td>
								<input type="text" name="txtCode" disabled value="<?php echo $row_up['Ma_HS'] ?>">
							</td>
						</tr>
						<tr>
							<td>Tên Hãng Sữa</td>
							<td>
								<input type="text" name="txtName" disabled value="<?php echo $row_up['Ten_HS'] ?>">
							</td>
						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td>
								<input type="text" name="txtAddress" disabled value="<?php echo $row_up['Dia_Chi'] ?>">
							</td>
							
						</tr>
						
						<tr>
							<td>Số điện thoại</td>
							<td>
								<input type="text" name="txtPhone" disabled value="<?php echo $row_up['Dien_Thoai'] ?>">
							</td>
						</tr>
							<td>Emai</td>
							<td>
								<input type="text" name="txtEmail" disabled value="<?php echo $row_up['Gmail'] ?>">
							</td>
						</tr>
						
						<tr>
							<th colspan="4">
								<input type="submit" name="btnSubmitPa" disabled value="Cập nhật" class="btn_bot">
							</th>
						</tr>
					</table>
				</form>
		</div>


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
                            <td>Mã công ty</td>
                            <td>Loại sữa</td>
                            <td>Trọng lượng</td>
                            <td>Đơn giá</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                                $i = ($page - 1)* 5 + $i;      
                        ?>
                        <?php while ($rs = mysqli_fetch_array($total)) : ?>
                            <tr>
                                <td width=60px><?= $i++ ?> </td>
                                <td><?= $rs["Ten_SP"] ?> </td>
                                 <td> <img style="width: 70px; height: 70px;" src=<?= $rs["Hinh_Anh"] ?>> </td>
                                <td><?= $rs["Hang_SP"]?></td>
                                <td><?= $rs["ma_HS"] ?> </td>
                                <td>
                                    <?php echo $rs['Loai_SP']; ?>
                                </td>
                                <td>
                                    <?= $rs["Trong_Luong"] ?> 
                                </td>
                                <td><?= $rs["Don_Gia"] ?> </td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

		
	</div>
</body>
</html>