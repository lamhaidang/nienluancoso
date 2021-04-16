<?php
if(isset($_POST['submit'])){
$tenten = $_POST['ten'];
$matmat = $_POST['password'];


$con = new mysqli("localhost","root","","nien_luan");
$con->set_charset("utf8");

$sql = "SELECT * FROM thanhvien";
$result = $con->query($sql);

$kt = 0;
while ($row = $result->fetch_assoc()){
	$kiemtra = ($row['ten'] == $tenten && $row['matkhau'] == $matmat);
	if($kiemtra == true){
		$kt = 1;
		$vt = $row['vaitro'];
	}
}
if($kt == 1){
	session_start();
	$_SESSION['tendangnhap'] = $tenten;
	$_SESSION['vt'] = $vt;
}
header("Location: website_nienluan_coso.php");
$con->close();
}
?>