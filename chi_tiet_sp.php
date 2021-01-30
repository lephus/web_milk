
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleadd.css">
	<title>Chi tiết sản phẩm</title>
</head>
<style type="text/css">
	*{
		margin:auto;
	}
</style>
<body>
	<?php
		//require_once('function_edit.php');
		include('connect.php');
		$key = $_GET['key'];
		$sql = "select * from san_pham where Id_KH = '$key'";
		$sq = mysqli_query($conn, $sql);
		$row_up = mysqli_fetch_assoc($sq);

	?>
		<div class="right" >
			<a href="index.php#portfolio">Trang Chủ</a>
		</div>
	<div class="container">
	<div class="title">
            <?php echo $row_up['Ten_SP']; ?>
        </div>
        <div class="mid"> >>
            <div class="left">
                <?php echo $row_up['Thanh_Phan']; ?>  
			</div>
			
        </div>
          <div class="mid">>>
            <div class="left">
                <?php echo $row_up['Loi_Ich']; ?>  
			</div>
			
        </div>

		<div class="bottom">
				<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Mã Sữa</td>
							<td>
								<input type="text" disabled name="txtCode" value="<?php echo $row_up['ma_HS']; ?>" >
							</td>
						</tr>
						<tr>
							<td>Loại Sữa</td>
							<td>
								<input type="text" disabled name="txtType" value="<?php echo $row_up['Loai_SP']; ?>" >
							</td>
							<td>Hãng Sữa</td>
							<td>
									<input type="text" disabled name="txtCompany" value="<?php echo $row_up['Hang_SP']; ?>">
							</td>
							
						</tr>
						<tr>
							<td>Trọng lượng</td>
							<td>
								<input type="text" name="txtWeigth" disabled value="<?php echo $row_up['Trong_Luong']; ?>">
							</td>
							<td>Đơn giá</td>
							<td>
								<input type="text" disabled name="txtPrice" value="<?php echo $row_up['Don_Gia']; ?>">
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<img style="width: 300px; height: 300px; margin-left:200px;" src=		<?php echo $row_up['Hinh_Anh']; ?>>					
								</img>
							</td>
						</tr>
					</table>
				</form>
		</div>
	</div>
	<div >
	</div>
</body>
</html>