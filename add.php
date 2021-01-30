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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="styleadd.css">
	<title>Add information Milk</title>
</head>
<body>
	<?php
		$msg =  "";
		if(isset($_POST['btnSubmit'])){
			$code = $_POST['txtCode'];
			$codeCompany = $_POST['txtCodeCompany'];
			$name = $_POST['txtCompany'];
			$company = $_POST['txtCompany'];
			$type = $_POST['txtType'];
			$weight = $_POST['txtWeigth'];
			$price = $_POST['txtPrice'];
			$tpdd = $_POST['txtTpdd'];
			$li = $_POST['txtLi'];
		
			$image = $_FILES['txtImage']['name'];
			$target = "img/" . basename($image);
		
			

			$query = "insert into san_pham(Ten_SP, ma_HS, Hang_SP, Loai_SP, Trong_Luong, Don_Gia, Thanh_Phan, Loi_Ich, Hinh_Anh) 
								  values('$name','$company','$company', '$type', '$weight', '$price', '$tpdd', '$li','$target')";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:admin.php");
			}
		}

		// 
		$sql_all_hangsua = "select * from hang_sua";
		$res_all_hangsua = mysqli_query($conn, $sql_all_hangsua);
		
		
	?>
	<div class="container">
	<div class="title">
            Thêm dữ liệu
        </div>
        <div class="mid">
            <div class="left">
               --------------
			</div>
			<div class="right">
				<a href="admin.php">quay lại</a>
			</div>
        </div>
		<div class="bottom">
				<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<table>
						<!-- <tr>
							<td>Mã Sữa</td>
							<td>
								<input type="text" name="txtCode">
							</td>
						</tr> -->
						<tr>
							<td>Tên Sữa</td>
							<td>
								<input type="text" name="txtName">
							</td>
						
						
						</tr>
						<tr>
							<td>Hãng Sữa</td>
							<td>
								<select name="txtCompany" id="">
									<?php while ($row= mysqli_fetch_array($res_all_hangsua)) :?>
										 <option value=<?php echo $row['Ma_HS']?>>
										 	<?php echo $row['Ten_HS'] ?>
										 </option>
										 <?php endwhile ?>
									
									
                            	</select>

								
								
							</td>
							<td>Loại Sữa</td>
							<td>
								<select name="txtType" id="">
									<option value="suatuoi">Sữa tươi</option>
									<option value="suabot">Sữa bột</option>
									<option value="suadac">Sữa đặc</option>
                            	</select>
							</td>
						</tr>
						<tr>
							<td>Trọng lượng</td>
							<td>
								<input type="text" name="txtWeigth">
							</td>
							<td>Đơn giá</td>
							<td>
								<input type="text" name="txtPrice">
							</td>
						</tr>
						
						<tr>
							<td class="fix">Thành phần dinh dưỡng</td>
							<td>
								<textarea name="txtTpdd" id="" cols="22" rows="5"></textarea>
							</td>
							<td class="fix"> Lợi ích</td>
							<td >
								<textarea name="txtLi" id="" cols="22" rows="5"></textarea>
							</td>
						</tr>
						<tr>
							<td >Hình ảnh</td>
							<td>
								<input type="file" name="txtImage" class="file" value="<?php echo $row_up['Image']; ?>">
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
	<script>
		
	</script>
</body>
</html>