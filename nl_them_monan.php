<html>
	<head>
		<title> THÊM MÓN ĂN	</title>
		<meta charset="utf-8">
		<style type="text/css">
			h1{
			 color  :red;
			}
			table{
			padding: 10px;
			background-color: #D3D3D3;
			
		}
		</style>
	</head>
	<body>
		<h1> THÊM MÓN ĂN<h1>
		<form action="" method="post" enctype="multipart/form-data">
			<table style="margin: auto">
				<tr>
				<td> Tên Món Ăn </td>
				<td></td>
				<td><input type="text" name="ten"></td>
			</tr>
			<tr>
				<td>Hình đại diện Món Ăn </td>
				<td></td>
				<td><input type="file" name="hinh" accept="image/*" /></td>
			</tr>
			<tr>
				<td> Mô Tả Của Món Ăn</td>
				<td></td>
				<td><textarea name="mota"></textarea></td>
			</tr>
			<tr>
				<td> Nguyên Liệu Của Món Ăn</td>
				<td></td>
				<td><textarea name="nguyenlieu"></textarea></td>
			</tr>
			<tr>
				<td> Video Hướng Dẫn </td>
				<td></td>
				<td><input type="file" name="video"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value ="Thêm Món Ăn"></td>
			</tr>
			<tr>
					<td colspan = "6" align="center"><a href="website_nienluan_coso.php"><h2>TRỞ VỀ TRANG CHỦ</h2><a></td>
			</tr>
			</table>
		</from>
		<?php
		
		if(isset($_POST['submit'])){
			$ten = $_POST['ten'];
			$hinh = $_FILES['hinh']['name'];
			$mt = $_POST['mota'];
			$nl = $_POST['nguyenlieu'];
			$video = $_FILES['video']['name'];
			
			move_uploaded_file($_FILES['hinh']['tmp_name'], './img/'. $_FILES['hinh']['name']);
			move_uploaded_file($_FILES['video']['tmp_name'], './img/'. $_FILES['video']['name']);
			
			$con = new mysqli("localhost","root","","nien_luan");
			$con->set_charset("utf8");
			
			$spl = "INSERT INTO monan(tenmonan,video,hinhanh,mota,nguyenlieu) VALUES('$ten','$video','$hinh','$mt','$nl')";
			
			$con->query($spl);
			$con->close();
			}
			
		?>
	</body>
</html>