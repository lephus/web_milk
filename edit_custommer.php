<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style_edit_custommer.css">
	<title>Chỉnh Sữa Thông Tin</title>
</head>
<body>

<?php
	include('connect.php');
	$key_custommer =  $_GET['key_custommer'];
	$sql_custommer = "select * from khach_hang where Id_KH = '$key_custommer'";
	$res_custommer = mysqli_query($conn, $sql_custommer);
	$row_up = mysqli_fetch_assoc($res_custommer);
	if(isset($_POST['btnSubmitCus'])){
		$code = $_POST['txtCode'];
		$name = $_POST['txtName'];
		
		$sex = $_POST['txtSex'];
		$address = $_POST['txtAddress'];
		$phone = $_POST['txtPhone'];
		$email = $_POST['txtEmail'];
		$sql = "update khach_hang set Ma_KH = '$code', Ten_KH = '$name', Gioi_Tinh = '$sex', Dia_Chi = '$address', SDT = '$phone', Gmail = '$email'  where Id_KH = '$key_custommer' ";
		$res = mysqli_query($conn, $sql);
		if($res){
			header("location:admin.php");
		}
	}
?>

<div class="container">
	<div class="title">
		CUSTOMMER
        </div>
        <div class="mid">
            <div class="left">
                Edit Custommers
			</div>
			<div class="right">
				<a href="admin.php">Back</a>
			</div>
		</div>
		<div class="bottom">
				<form method="POST" autocomplete="off" >
					<table>
						<tr>
							<td>Mã Khách Hàng</td>
							<td>
								<input type="text" name="txtCode" value="<?php echo $row_up['Ma_KH'] ?>">
							</td>
						</tr>
						<tr>
							<td>Tên Khách Hàng</td>
							<td>
								<input type="text" name="txtName" value="<?php echo $row_up['Ten_KH'] ?>">
							</td>
						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td>
								<input type="text" name="txtAddress" value="<?php echo $row_up['Dia_Chi'] ?>">
							</td>
						</tr>
						<tr>
							<td>Giới tính</td>
							<td >
							<input type="text" name="txtSex" value="<?php echo $row_up['Gioi_Tinh'] ?>">
							</td>		
						</tr>
						<tr>
							<td>Số điện thoại</td>
							<td>
								<input type="text" name="txtPhone" value="<?php echo $row_up['SDT'] ?>">
							</td>
						</tr>
							<td>Emai</td>
							<td>
								<input type="text" name="txtEmail" value="<?php echo $row_up['Gmail'] ?>">
							</td>
						</tr>
						<tr>
							<th colspan="4">
								<input type="submit" name="btnSubmitCus" value="Cập nhật" class="btn_bot">
							</th>
						</tr>
					</table>
				</form>
			
		</div>
		
		
	</div>
</body>
</html>