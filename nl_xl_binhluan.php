<?php
if(isset($_POST['submit'])){
	 $con = new mysqli("localhost","root","","nien_luan");
    $con->set_charset("utf8");
	
	
	$idma = $_POST['an'];
	$bl = $_POST['binhluan'];
	session_start();
	if(isset($_SESSION['tendangnhap'])){
		$te = $_SESSION['tendangnhap'];
		$sql1 = "SELECT * FROM thanhvien WHERE ten ='$te'";
		$result = $con->query($sql1);
    	$row = $result->fetch_assoc();
		$idtv = $row['id'];
	
	$sql1 = "INSERT INTO binhluan(idtv,idma,binhluan) VALUES('$idtv','$idma','$bl')";
	$result = $con->query($sql1);
	header("Location: website_nienluan_coso.php");
	}}
?>