<?php
session_start();

if(!(isset($_SESSION['addd']) )){
	header("location:index.php");
}
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleadd_company.css">
	<title>Thêm hãng sữa</title>
</head>
<body>
<?php
	if(isset($_POST['btnSubmit'])){
		$code = $_POST['txtCode'];
		$name = $_POST['txtName'];
		$address = $_POST['txtAddress'];
		$phone = $_POST['txtPhone'];
		$email = $_POST['txtEmail'];
		$query = "insert into hang_sua(Ma_HS, Ten_HS, Dia_Chi, Dien_Thoai, Gmail) 
							  values('$code', '$name', '$address', '$phone', '$email')";
		$res = mysqli_query($conn, $query);
		if($res){
			header("location:admin.php");
		}

	}
?>	
<div class="container">
	<div class="title">
            Thêm dữ liệu
        </div>
        <div class="mid">
            <div class="left">
                -------------
			</div>
			<div class="right">
				<a href="admin.php">quay lại</a>
			</div>
        </div>
		<div class="bottom">
				<form method="POST" autocomplete="off">
					<table>
						<tr>
							<td>Mã Hãng Sữa</td>
							<td>
								<input type="text" name="txtCode">
							</td>
						</tr>
						<tr>
							<td>Tên Hãng Sữa</td>
							<td>
								<input type="text" name="txtName">
							</td>
						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td>
								<input type="text" name="txtAddress">
							</td>
							
						</tr>
						
						<tr>
							<td>điện thoại</td>
							<td>
								<input type="text" name="txtPhone">
							</td>
						</tr>
							<td>Emai</td>
							<td>
								<input type="text" name="txtEmail">
							</td>
						</tr>
						
						<tr>
							<th colspan="4">
								<input type="submit" name="btnSubmit" value="Thêm mới" class="btn_bot">
							</th>
						</tr>
					</table>
				</form>
			
		</div>
		
		
	</div>
</body>
</html>