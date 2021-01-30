<?php
	include ('connect.php');
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


	$key_company = $_GET['key_company'];
	$sql_all = "delete from san_pham where ma_HS = '$key_company'";
	$sql_company = "delete from hang_sua where Ma_HS = '$key_company'";
	$sel_all = mysqli_query($conn, $sql_all);
	 $ok = mysqli_query($conn, $sql_company);

	if($ok){
		 header("location:admin.php");	
	}
	
?>