<?php
	if(isset($_GET['t'])){
		$id = $_GET['t'];
		$con = new mysqli("localhost","root","","nien_luan");
		$con->set_charset("utf8");
		
		$sql = "SELECT * FROM monan WHERE nguyenlieu like '%$id%'";
		
		$result = $con->query($sql);
		
		while($row = $result->fetch_assoc()){
		
		echo "<table><tr>";
		echo "<td align='center'><img src='img/" . $row['hinhanh']. "'width='50px' onclick='ham(this.src)' ></td>";
		echo "<td><p style='text-align : center'>".$row['tenmonan']."</p></td>";
	
		echo "</tr></table>";
		}
		//echo $id;
		$con->close();
	}
?>