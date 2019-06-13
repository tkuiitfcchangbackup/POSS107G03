<!DOCTYPE html>
<html>
<head>
	<meta type="utf-8"></meta>
	<style>
	.title{
		font-size:50px;text-align:center;color:black;
	}
	.contant{
		font-size:20px;text-align:center;color:black;
	}
	table{
		border-collapse:collapse;
	}
	td{
		border-bottom:1px solid black;padding:2px;
	}
	tr:nth-child(1){
		background-color:#E8CCFF;color:black;
	}
	tr:nth-child(even){
		background-color:#FFF0F5;color:black
	}
	.home{
		color:black;font-size:15px;position:absolute;left:300px;top:120px;cursor:pointer;
	}
	.hot{
		color:black;font-size:15px;position:absolute;left:400px;top:120px;cursor:pointer;
	}
	.taipei{
		color:black;font-size:20px;position:absolute;left:480px;top:120px;cursor:pointer;font-weight:bold;
	}
	.hsinchu{
		color:black;font-size:15px;position:absolute;left:600px;top:120px;cursor:pointer;
	}
	.taichung{
		color:black;font-size:15px;position:absolute;left:700px;top:120px;cursor:pointer;
	}
	.tainan{
		color:black;font-size:15px;position:absolute;left:800px;top:120px;cursor:pointer;
	}
	.kaohsiung{
		color:black;font-size:15px;position:absolute;left:900px;top:120px;cursor:pointer;
	}
	.aboutus{
		width:60px;height:20px;border:2px solid #A20055;padding:5px;border-radius:10px;color:black;font-size:15px;position:absolute;right:100px;top:50px;cursor:pointer;
	}
	#home:hover{
		font-size:20px;font-weight:bold;
	}
	#hot:hover{
		font-size:20px;font-weight:bold;
	}
	#taipei:hover{
		font-size:20px;font-weight:bold;
	}
	#hsinchu:hover{
		font-size:20px;font-weight:bold;
	}
	#taichung:hover{
		font-size:20px;font-weight:bold;
	}
	#tainan:hover{
		font-size:20px;font-weight:bold;
	}
	#kaohsiung:hover{
		font-size:20px;font-weight:bold;
	}
	</style>
</head>
<body style="margin:0px;background-color:#FFFAFA">
	<div class="title"><a href="web.php" style="text-decoration:none;color:black">Food Come Close</a></div>
	<div class="contant">
	Welcome to food come close<br/>
	Hope you can find the restaurant that you want from our website<br/>
	</div>
	<div class="box">
	<div class="home" id="home"><a href="webhome.html" style="text-decoration:none;color:#A20055">Home</a></div>
	<div class="hot" id="hot"><a href="webhot.html" style="text-decoration:none;color:#A20055">Hot</a></div>
	<div class="taipei" id="taipei"><a href="webtaipei.php" style="text-decoration:none;color:#A20055">Taipei</a></div>
	<div class="hsinchu" id="hsinchu"><a href="webhsinchu.php" style="text-decoration:none;color:#A20055">Hsinchu</a></div>
	<div class="taichung" id="taichung"><a href="webtaichung.php" style="text-decoration:none;color:#A20055">Taichung</a></div>
	<div class="tainan" id="tainan"><a href="webtainan.php" style="text-decoration:none;color:#A20055">Tainan</a></div>
	<div class="kaohsiung" id="kaohsiung"><a href="webkaohsiung.php" style="text-decoration:none;color:#A20055">Kaohsiung</a></div>
	</div>
	<div class="aboutus" id="aboutus"><a href="webaboutus.html" style="text-decoration:none;color:#A20055">About Us</a></div>
	<div style="position:absolute;left:310px;top:150px"><img src="taipei1.jpg" width="300"></img></div>
	<div style="position:absolute;left:10px;top:150px"><img src="taipei2.jpg" width="300" height="385"></img></div>
	<div style="position:absolute;left:610px;top:150px"><img src="taipei3.jpg" width="300" height="385"></img></div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<p>
<?php
$link=mysqli_connect("localhost","88user","8811") or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link, "data"); //選擇資料庫data
$sql = "SELECT * FROM taipei"; //在data資料表中選擇所有欄位
mysqli_query($link,'SET CHARACTER SET utf8');   // 送出Big5編碼的MySQL指令
mysqli_query($link,"SET collation_connection 'utf8'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result);  // 取得記錄數
?>
</p>
<br><br><br>
<table  border="1" align="center">
<tr>
<td>Restaurant</td>
<td>Type</td>
<td>Price</td>
<td>CP Number</td>
<td>Open Time</td>
<td>Close Time</td>
</tr>
<?php
for ($i=0;$i<$total_records;$i++) {$row = mysqli_fetch_assoc($result); //將陣列以欄位名索引
?>
<tr>
<td><?php echo $row[resturant_name];?></td>
<td><?php echo $row[type];?></td>
<td><?php echo $row[r_price];?></td>
<td><?php echo $row[r_cpnumber];?></td>
<td><?php echo $row[open_time];?></td>
<td><?php echo $row[close_time];?></td>
</tr>
<?php    }   ?>
</table>

</body>
</html>
