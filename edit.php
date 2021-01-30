<?php
session_start();

if(!(isset($_SESSION['editt']) )){
	header("location:index.php");
}
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleadd.css">
	<title>Chỉnh Sửa Thông Tin</title>
</head>
<body>
	<?php
		//require_once('function_edit.php');
		include('connect.php');
	$key_edit_product = $_GET['key_edit_product'];
	
	$sql_edit_product = "select * from san_pham where Id_KH = '$key_edit_product'";
	$res_edit_product = mysqli_query($conn, $sql_edit_product);
	$row_up = mysqli_fetch_assoc($res_edit_product);
	//print_r($row_up);
	if(isset($_POST['btnSave'])){
		$code = $_POST['txtCode'];
		$name = $_POST['txtName'];
		$company = $_POST['txtCompany'];
		$type = $_POST['txtType'];
		$weight = $_POST['txtWeigth'];
		$price = $_POST['txtPrice'];
		$tpdd = $_POST['txtTpdd'];
		$li = $_POST['txtLi'];
		
		$image = $_FILES['txtImage']['name'];
		$target = "img/" . basename($image);
		

		$sql = "update san_pham set ma_HS = '$code', Ten_SP = '$name', Hang_SP = '$company', Loai_SP = '$type', Trong_Luong = '$weight', Don_Gia = '$price', Hinh_Anh = '$target', Thanh_Phan = '$tpdd', Loi_Ich = '$li'
				where Id_KH = '$key_edit_product' ";
		$res = mysqli_query($conn, $sql);
		if($res){
			//mysqli_close($con);
			header("location:admin.php");
		}
	}

		$sql_all_hangsua = "select * from hang_sua";
		$res_all_hangsua = mysqli_query($conn, $sql_all_hangsua);
		

	?>
	<div class="container">
	<div class="title">
            MILK
        </div>
        <div class="mid">
            <div class="left">
                Edit Information Milk
			</div>
			<div class="right">
				<a href="admin.php">Back</a>
			</div>
        </div>
		<div class="bottom">
				<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<table>
					

						<tr>
						
							<td>Tên Sữa</td>
							<td>
								<input type="text" name="txtName" value="<?php echo $row_up['Ten_SP']; ?>">
							</td>
						</tr>
						<tr>
							<td>Loại Sữa</td>
							<td>
								
								<input type="text" name="txtType" value="<?php echo $row_up['Loai_SP']; ?>">
							</td>
							<td>Hãng Sữa</td>
							<td>
								<select name="txtCompany" id="">
									<?php while ($row= mysqli_fetch_array($res_all_hangsua)) :?>
						<?php if($row['Ma_HS'] == $row_up['ma_HS']){
							?>
									<option selected value=<?php echo $row['Ma_HS']?>>
										<?php echo $row['Ten_HS'] ?>
									</option>

							<?php }else{ ?>
										<option value=<?php echo $row['Ma_HS']?>>
										 	<?php echo $row['Ten_HS'] ?>
										 </option>
								<?php }?>
								<?php endwhile ?>	
                            	</select>			
							</td>
							
						</tr>
						<tr>
							<td>Trọng lượng</td>
							<td>
								<input type="text" name="txtWeigth" value="<?php echo $row_up['Trong_Luong']; ?>">
							</td>
							<td>Đơn giá</td>
							<td>
								<input type="text" name="txtPrice" value="<?php echo $row_up['Don_Gia']; ?>">
							</td>
						</tr>
						
						<tr>
							<td class="fix">Thành phần dinh dưỡng</td>
							<td>
								<textarea name="txtTpdd" id="" cols="22" rows="5" >
									<?php echo $row_up['Thanh_Phan']; ?>
								</textarea>
							</td>
							<td class="fix"> Lợi ích</td>
							<td >
								<textarea name="txtLi" id="" cols="22" rows="5">
									<?php echo $row_up['Loi_Ich']; ?>
								</textarea>
							</td>
						</tr>
						<tr>
							<td >Hình ảnh</td>
							<td colspan="2">
								<input type="file" name="txtImage" class="file" value="<?php echo $row_up['Image']; ?>">
							</td>
						</tr>
						<tr>
							<th colspan="4">
								<input type="reset" name="btnReset" value="Cancel" class="btn_bot">
								<input type="submit" name="btnSave" value="Save" class="btn_bot">
								
							</th>
						</tr>
					</table>
				</form>
		</div>	
	</div>
</body>
</html>