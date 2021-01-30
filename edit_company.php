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
<div class="container">
	<div class="title">
            MILK
        </div>
        <div class="mid">
            <div class="left">
                Edit Company Milk
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
								<input type="text" name="txtCode" value="<?php echo $row_up['Ma_HS'] ?>">
							</td>
						</tr>
						<tr>
							<td>Tên Hãng Sữa</td>
							<td>
								<input type="text" name="txtName" value="<?php echo $row_up['Ten_HS'] ?>">
							</td>
						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td>
								<input type="text" name="txtAddress" value="<?php echo $row_up['Dia_Chi'] ?>">
							</td>
							
						</tr>
						
						<tr>
							<td>Số điện thoại</td>
							<td>
								<input type="text" name="txtPhone" value="<?php echo $row_up['Dien_Thoai'] ?>">
							</td>
						</tr>
							<td>Emai</td>
							<td>
								<input type="text" name="txtEmail" value="<?php echo $row_up['Gmail'] ?>">
							</td>
						</tr>
						
						<tr>
							<th colspan="4">
								<input type="submit" name="btnSubmitPa" value="Cập nhật" class="btn_bot">
							</th>
						</tr>
					</table>
				</form>
			
		</div>
		
		
	</div>
</body>
</html>