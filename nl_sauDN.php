<?php
	session_start();
	if(isset($_SESSION['tendangnhap'])){
		$tendn = $_SESSION['tendangnhan'];
		$con = new mysqli("localhost","root","","nien_luan");
		$con->set_charset("utf8");
		
		$sql = "SELECT * FROM thanhvien WHERE  ten = '$tendn'";
		
		$result = $con->query($sql);
		
		while($row = $result->fetch_assoc()){
		echo "<p style='text-align : center'>".$row['ten']."</p>";
		}
		//echo $id;
		$con->close();
	}
?>