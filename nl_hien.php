<?php
    $id = $_REQUEST['t'];
    $con = new mysqli("localhost","root","","nien_luan");
    $con->set_charset("utf8");
    
    $sql = "SELECT * FROM monan WHERE hinhanh='$id'";
    
    $result = $con->query($sql);
    
	$row = $result->fetch_assoc();
	
	echo "<div style='text-align : center'><h1 style='color: red'><p>".$row['tenmonan']."</p></h1>";
	echo "<p style='font-size: 25'>".$row['mota']."</p>";
    echo "<img width='600' src='img/" .$row['hinhanh']. "'>";
	echo "<p style='font-size: 25; color: blue'> NGUYÊN LIỆU CHẾ BIẾN GỒM CÓ</p>";
	echo "<p style='font-size: 25'>".$row['nguyenlieu']."</p>";	
	echo "<video width='600' height='460' controls> <source src= 'img/". $row['video']. "' type='video/mp4'>  </video></div>";
	
	echo "<h3 align='center'> Nhận xét của bạn về món ăn này</h3>";
	echo "<form id='formbl' action='nl_xl_binhluan.php' method='post' enctype='multipart/form-data'><table>";
		echo"<tr><td align='center'><input class='in' type='text' name='binhluan' placeholder='bình luận của bạn về món ăn này'></td></tr>";
		echo"<tr><td rowspan = '5' align='center'><input input type='submit' name='submit' value='Gửi'></td></tr>";
		echo"<tr><td align='center'><input  type='hidden' name='an' value='".$row['id']."'></td></tr>";
	echo "</table></form>";
	
	$sql2 = "SELECT * FROM binhluan where idma = '".$row['id']."'";
    $result2 = $con->query($sql2);    
	
	
	while ($row2 = $result2->fetch_assoc() ){
		$sql3 = "SELECT * FROM thanhvien where id = '".$row2['idtv']."'";
		$result3 = $con->query($sql3);    
		$row3 = $result3->fetch_assoc();

		
		if($row2){
			echo "<table  style='border: 1px solid black; background-color: #d9ecf0'>";
			echo"<tr><td><p style='font-size: 15; color: red'>".$row3['ten']."</p></td></tr>";	
			echo"<tr><td align='center'><p>".$row2['binhluan']."</p></td></tr>";
			echo "</table>";
		}	
	}
	
    $con->close();
	
	
	
	
	
?>