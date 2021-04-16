<?php
	$id=$_GET['id'];
	$con = new mysqli("localhost","root","","nien_luan");
	$con->set_charset("utf8");
	$sql = "DELETE FROM monan where id = '$id'";
	$con->query($sql);
	header("Location: nl_dsma.php");
?>