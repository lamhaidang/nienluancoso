<?php
	$id=$_GET['id'];
	if(isset($_POST['submit'])){
	
	$con = new mysqli("localhost","root","","nien_luan");
	$con->set_charset("utf8");
	$ten = $_POST['ten'];
	$mt = $_POST['mt'];
	$nl = $_POST['nl'];
	$hinh = $_FILES['hinh']['name'];
	$video = $_FILES['video']['name'];
	
			
			move_uploaded_file($_FILES['hinh']['tmp_name'], './img/'. $_FILES['hinh']['name']);
			move_uploaded_file($_FILES['video']['tmp_name'], './img/'. $_FILES['video']['name']);
	if($hinh == ''){
		$hinh = $h;
	}
	if($video == ''){
		$video = $v;
	}
			
	$sql = "update monan set tenmonan='$ten', mota='$mt', nguyenlieu='$nl', video ='$video', hinhanh='$hinh' where id='$id'";
	$con->query($sql);
	header("Location: nl_dsma.php");
	}
	
	$con = new mysqli("localhost","root","","nien_luan");
	$con->set_charset("utf8");
	$sql2 = "SELECT * FROM monan where id = '$id'";
	$result = $con->query($sql2);
	$row = $result->fetch_assoc();
	$h = $row['hinhanh'];
	$v = $row['video'];
?>




<html>
	<head>
		<title> SỬA LẠI THÔNG TIN CỦA MÓN ĂN </title>
		<meta charset="utf-8">
		<style type="text/css">
			h1{
			 color  :red;
			}
			table{
			padding: 10px;
			background-color: #D3D3D3;
			}
			.cach{
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
		<table style="margin: auto" width ="1000">
			<tr>
				<td rowspan = "4" align="center"><img src="<?php echo './img/' . $row['hinhanh']; ?>" width='240px' ></td>
				<td rowspan = "4" align="center">
					<video width="320" height="240" controls>
						<source src="<?php echo './img/' . $row['video']; ?>" type="video/mp4">  
					</video>
				</td>
			</tr>
			
			<tr>
				<td><h4>TÊN CỦA MÓN ĂN <input type="text" name="ten" value="<?php echo $row['tenmonan']; ?>"></h4></td>
			</tr>
			<tr>
				<td><h4>MÔ TẢ CỦA MÓN ĂN  <textarea name="mt" cols="60" rows="7"><?php echo $row['mota']?></textarea></h4></td>
			</tr>
			<tr>
				<td><h4>NGUYÊN LIỆU CỦA MÓN ĂN <textarea name="nl"cols="60" rows="5"> <?php echo $row['nguyenlieu']?></textarea></h4></td>
			</tr>
			<tr>
				<td><input type="file" name="hinh" accept="image/*" /></td>
				<td><input type="file" name="video"></td>
				<td colspan = "2"></td>
			</tr>
				<td class="cach" colspan = "4" align="center"><input type="submit" name="submit" value ="SỦA MÓN ĂN"></td>
			<tr>
				<td class="cach" colspan = "4" align="center"><a href="nl_dsma.php"><h2>TRỞ VỀ DANH SÁCH MÓN ĂN</h2><a></td>
			</tr>
		
			
	</table>
		
		</form>
	</body>
</html>
