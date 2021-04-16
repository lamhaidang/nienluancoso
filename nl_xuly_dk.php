<?php
if(isset($_POST['submit'])){
$tendangnhap =$_POST['ten'];
$matkhau1 = $_POST['password1'];
$matkhau2 = $_POST['password2'];


$con = new mysqli("localhost","root","","nien_luan");
$con->set_charset("utf8");

$sql = "INSERT INTO thanhvien(ten,matkhau,vaitro) VALUES ('$tendangnhap','$matkhau1','nguoidung')";

$con->query($sql);

$con->close(); 
header("Location: website_nienluan_coso.php");
}
?>
