
<?php
	$con = new mysqli("localhost","root","","nien_luan");
	$con->set_charset("utf8");
	$sql = "SELECT * FROM monan";
	$result = $con->query($sql);
	
?>




<html>
	<head>
		<title> DANH SÁCH MÓN ĂN </title>
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
		<form action="" method="post" enctype="multipart/form-data">
			<table style="margin: auto" border = 1>
				<tr><td colspan = "5" align="center"><h3>  DANH SÁCH MÓN ĂN LÀ <h3></td></tr>
				<tr>
					<td> STT </td>
					<td>TÊN MÓN ĂN</td>
					<td>HÌNH</td>
					<td>SỬA</td>
					<td>XÓA</td>
				
				</tr>
				<?php
				$i = 1;
					while($row = $result->fetch_assoc()){
				?>
				<tr>
					<td> <?php echo $i++; ?> </td>
					<td><?php echo $row['tenmonan']?></td>
					<td align="center"><img src="<?php echo './img/' . $row['hinhanh']; ?>" width='50px' ></td>
					<td><a href="nl_sua.php?id=<?php echo $row['id']?>"><img src="img/edit.png" width='20px'></a></td>
					<td><a href="nl_xoa.php?id=<?php echo $row['id']?>"><img src="img/delete.png" width='20px'></a></td>
					
	
				</tr>
					<?php } ?>
				<tr>
					<td colspan = "6" align="center"><a href="website_nienluan_coso.php"><h2>TRỞ VỀ TRANG CHỦ</h2><a></td>
				</tr>
			</table>
		</form>
	</body>
</html>