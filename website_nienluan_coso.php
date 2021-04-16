<html>
	<head>
		<title>Website hướng dẫn nấu ăn</title>
		<meta charset="utf-8">
		<style type="text/css">
			body{
				width: 1200px;
				margin: 0px auto;
			}
			.in {
				width: 900px;
				box-sizing: border-box;
				border: 1px solid black;
				border-radius: 4px;
				outline:none;
				padding: 12px 14px;
			}
			h3{
				color: blue;
			}
			#title{
			height: 210px;
			background-image: url(https://cdn.cet.edu.vn/wp-content/uploads/2019/05/chon-lua-va-nau-ky-thuc-pham.jpg);
			}
			#title h1{
			color: white;
			padding: 10px;
			text-shadow: 3px 3px 3px yellow;
			font-size: 80px;
			text-align: center;
			}
			#title a{
			color: yellow;
			font-size: 30px;
			text-align: center;
			}
			#left{
			width: 900px;
			background: 
			float: left;
			}
			#trai{
				width: 900px;
				float: left;
			}
			#phai{
				width: 290px;
				float: right;
				background-color: hsl(182, 100%, 90%);
				padding: 12px 14px;
				box-sizing: border-box;
			}
			.giua{
				text-align: center;
			}
			.giuaa{
				padding-top : 20px;
				text-align: center;
			}
			#dangkyform{
				display: none;
			}
			.btn{
				border: 1px solid black;
				background-color: rgb(239, 239, 239);
				padding: 3px;
				border-radius: 3px;
				cursor: pointer;
			}
			.mtt{
				text-align: center;
				font-size: 25;
				height: 250px;
				background-color: #e3faca;
			}
		</style>
	</head>
	<body>
	<div id="title">
			<h1>Website hướng dẫn nấu ăn </h1>
			<a align="center">Lâm Hãi Đăng B1706460</a>
		</div>
	
	<div id="phai">
	<?php
		session_start();
			if(isset($_SESSION['tendangnhap'])){
				echo "<h3>Bạn Đang Sử Dụng Tài Khỏan</h3>";
				echo "<h1 style='color: red; text-align : center'>".$_SESSION['tendangnhap']."</h1>";
				echo "<p class='giuaa'><a href='nl_dx.php'><span class='btn'>Đăng Xuất</span></a></p>";
			}
			else{ 
			echo "<h3>Đăng Nhập Thất Bại</h3>";
	?>
		<form id="dangnhapform" action="nl_xuly_dn.php" method="post" enctype="multipart/form-data">
			 <table style="margin: auto">
				<tr>
					<td class="giua">Tên Đăng Nhập </td>
				</tr>
				<tr>
					<td class="giua"><input type="text" name="ten" id="ten"></td>				
				</tr>
				<tr>
					<td class="giua">Mật Khẩu</td>
				</tr>
				<tr>
					<td class="giua"><input type="password" name="password"></td>
				</tr>
				<tr>
					<td class="giuaa" ><input onclick="sauDN()" type="submit" name="submit" value ="Đăng Nhập"></td>
				</tr>
				<tr>
					<td class="giuaa"><span class="btn" onclick="dangky()">Đăng Ký</span></td>
				</tr>
			</table>
		</form>
		<?php
			}
			if(isset($_SESSION['vt'])){
				if($_SESSION['vt'] == 'admin'){
					echo "<p class='giuaa'><a href='nl_them_monan.php'><span class='btn'>Thêm Món Ăn</span></a></p>";
					echo "<p class='giuaa'><a href='nl_dsma.php'><span class='btn'>Xem Danh Sách Món Ăn Món Ăn</span></a></p>";
				}
				
			}
		?>
		<form id="dangkyform" action="nl_xuly_dk.php" method="post" enctype="multipart/form-data" onsubmit = "return baoloi()">
		  <table style="margin: auto">
			<tr>
				<td class="giua">Tên Đăng Nhập </td>
			</tr>
			<tr>
				<td class="giua"><input type="text" name="ten"></td>				
			</tr>
			<tr><td colspan ="3"><p align ="center" style = "color : red" id ="blt"></p></td></tr>

			<tr>
				<td class="giua">Mật Khẩu</td>
			</tr>
			<tr>
				<td class="giua"><input type="password" name="password1" id="password1"></td>
			</tr>
			<tr><td colspan ="3"><p align ="center" style = "color : red" id ="blmk1"></p></td></tr>

			<tr>
				<td class="giua">Gõ Lại Mật Khẩu </td>
			</tr>
			<tr>
				<td class="giua"><input type="password" name="password2"  id="password2"></td>
			</tr>
			<tr><td colspan ="3"><p align ="center" style = "color : red" id ="blmk2"></p></td></tr>

			<tr>
				<td class="giuaa"><input type="submit" name="submit" value ="Đăng Ký" ></td>
			</tr>	
			</table>
		</form>
	</div> 
	<?php
		$con = new mysqli("localhost","root","","nien_luan");
		$con->set_charset("utf8");
		
		$sql2 = "SELECT * FROM monan";
		$result2 = $con->query($sql2);
		$sql3 = "SELECT * FROM monan";
		$result3 = $con->query($sql3);

	?>
		
	<div id="trai">
		<div id="left">
				<table>
					<tr><td align="center"><input id="tim" class="in" type="text" name="ten" placeholder="mời nhập tên món ăn"></td></tr>
					<tr><td rowspan = "5" align="center"><button onclick = "timkiem()">tìm</button></td></tr>
				</table>
				<div id ="hientim">
				</div>
		</div>
		<br><br>
		
		
		
		
		
		<h3 align="center">Những món ăn phổ biến</h3>
		<table>
			<?php $row = $result3->fetch_assoc(); ?>
		   <tr>
			<td><img id="hmh" src="<?php echo "img/" . $row['hinhanh'] ?>" height="250" width="250" onclick="ham(this.src)"/></td>
			<td class="mtt"><p id="mt" ><?php  echo $row['mota'] ?></p></td>
		   </tr>
		 </table>
		 <table>
		 <?php $row = $result3->fetch_assoc(); ?>
			<tr>			
			<td class="mtt"><p id="mt1" ><?php  echo $row['mota'] ?></p></td>
			<td onclick="ham(<?php echo $row['id'] ?>)"><img id="hmh1" src="<?php echo "img/" . $row['hinhanh'] ?>" height="250" width="250" onclick="ham(this.src)" /></td>
		   </tr>			
		</table>
		<table>
		<?php $row = $result3->fetch_assoc(); ?>
		   <tr>
			<td onclick="ham(<?php echo $row['id'] ?>)"><img id="hmh2" src="<?php echo "img/" . $row['hinhanh'] ?>" height="250" width="250" onclick="ham(this.src)" /></td>
			<td class="mtt"><p id="mt2" ><?php  echo $row['mota'] ?></p></td>
		   </tr>
		 </table>
		 
		 
		 <h3 align="center">Những món ăn được đề xuất giành cho bạn</h3>
		<p  align="center"> Nếu như bạn đang phân vân không biết phải nấu món ăn nào cho phù hợp thì bạn có thể nhập những nguyên liệu hiện có của bạn <br>vào ô bên dưới đây chúng tôi sẽ gợi ý cho bạn những món ăn mà bạn có thể nấu dựa trên số nguyên liệu mà bạn có</p>
			<table>
				<tr><td align="center"><input id="timtheoNL"class="in" type="text" name="tenNL" placeholder="mời nhập vào những nguyên liệu hiện có của bạn"></td></tr>
				<tr><td rowspan = "5" align="center"><button onclick = "timkiemtheoNL()">tìm</button></td></tr>
			</table>
			<div id ="hientheoNL">
				</div>

		
		 <div id="hien">
		 </div>
		
	</div>
	
	
	
	
	
	
	<script>
	function baoloi(){
		var t = document.getElementById("ten").value;
		var mk1 = document.getElementById("password1").value;
		var mk2 = document.getElementById("password2").value;
	
		var bieuthucchinhquy =/^[A-Za-z][A-Za-z0-9]{5,14}$/;
			ok =true;
			
			
			if(t==""){
				document.getElementById("blt").innerHTML = "tên đăng nhập không được để trống";
				ok=false;
			} else{
				if (bieuthucchinhquy.test(t)){
					document.getElementById("blt").innerHTML = "";
				} else{
					document.getElementById("blt").innerHTML = "tên đăng nhập không khop";
					ok=false;
				}
			}
			
			var bieuthucmatkhau = /^[A-Za-z0-9]{6,15}$/;
			if(mk1==""){
				document.getElementById("blmk1").innerHTML= "mật khẩu không được để trống";
				ok=false;
			} else{
				if (!bieuthucmatkhau.test(mk1)){
					document.getElementById("blmk1").innerHTML = "mật khẩu không hợp lệ";
					ok=false;
					
				} else{
					document.getElementById("blmk1").innerHTML = "";
				}
			}
			
			if(mk2==""){
				document.getElementById("blmk2").innerHTML = "mời nhập lại mật khẩu";
				ok=false;
			} else{
			if(mk2!=mk1){
				document.getElementById("blmk2").innerHTML = "mật khẩu khong giong voi mat khau da nhap";
				ok=false;
			} else{
				document.getElementById("blmk2").innerHTML = "";
			}
			}
		return ok;
	}
	
	
	
	var IMGGE = [];
	var MOTA = [];
	var so = 0,m;
		function dangky(){
			document.getElementById("dangkyform").style.display = 'block';
			document.getElementById("dangnhapform").style.display = 'none';
		}
		function timkiem(){
			var value = document.getElementById("tim").value;
			var xmlhttp, ok;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp=new ActiveXObject("Micrsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById("hientim").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","nl_tim.php?t="+value,true);
			xmlhttp.send();
		}
		function timkiemtheoNL(){
			var value = document.getElementById("timtheoNL").value;
			var xmlhttp, ok;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp=new ActiveXObject("Micrsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById("hientheoNL").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","nl_timtheoNL.php?t="+value,true);
			xmlhttp.send();
		}
		function ham(str){
			str = str.slice(24);
			var xmlhttp, ok;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp=new ActiveXObject("Micrsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById("hien").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","nl_hien.php?t="+str,true);
			xmlhttp.send();
		}
			
			
		<?php
		$i =0;
		while ($row = $result2->fetch_assoc() ){
			echo "IMGGE[".$i."] = 'img/" . $row['hinhanh'].    "';";
			echo "MOTA[".$i."] = '".$row['mota'].  "    ';";
			$i++;
		}
		
		echo "m = " . ($i-1) .";";
		?>
		function activateTimer(){
			myvar = setInterval(doitheoh,5000);
			myvar = setInterval(doitheoh1,7000);
			myvar = setInterval(doitheoh2,6000);
		}
		function doitheoh(){
			so ++;
			if(so > m) so = 0;
			var theImg = document.getElementById("hmh");
			theImg.setAttribute("src",IMGGE[so]);
			var thelink = document.getElementById("mt").innerHTML = MOTA[so];
			
		}
		function doitheoh1(){
			so ++;
			if(so > m) so = 0;
			var theImg = document.getElementById("hmh1");
			theImg.setAttribute("src",IMGGE[so]);
			var thelink = document.getElementById("mt1").innerHTML = MOTA[so];
		}
		function doitheoh2(){
			so ++;
			if(so > m) so = 0;
			var theImg = document.getElementById("hmh2");
			theImg.setAttribute("src",IMGGE[so]);
			var thelink = document.getElementById("mt2").innerHTML = MOTA[so];
		}
		activateTimer();
		function pauseTimer(){
			clearInterval(myvar);
		}
	</script>
	</body>
</html>