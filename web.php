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
	.introduction{
		font-size:20px;text-align:center;color:black;
	}
	.home{
		color:black;font-size:15px;position:absolute;left:300px;top:120px;cursor:pointer;
	}
	.hot{
		color:black;font-size:15px;position:absolute;left:400px;top:120px;cursor:pointer;
	}
	.taipei{
		color:black;font-size:15px;position:absolute;left:500px;top:120px;cursor:pointer;
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
	<div class="title"><a href="web.html" style="text-decoration:none;color:black">Food Come Close</a></div>
	<div class="contant">
	Welcome to food come close<br/>
	Hope you can find the restaurant that you want from our website<br/>
	</div>
	<div class="box">
	<div class="home" id="home"><a href="webhome.html" style="text-decoration:none;color:#A20055">Home</a></div>
	<div class="hot" id="hot"><a href="webhot.html" style="text-decoration:none;color:#A20055">Hot</a></div>
	<div class="taipei" id="taipei"><a href="webtaipei.html" style="text-decoration:none;color:#A20055">Taipai</a></div>
	<div class="hsinchu" id="hsinchu"><a href="webhsinchu.html" style="text-decoration:none;color:#A20055">Hsinchu</a></div>
	<div class="taichung" id="taichung"><a href="webtaichung.html" style="text-decoration:none;color:#A20055">Taichung</a></div>
	<div class="tainan" id="tainan"><a href="webtainan.html" style="text-decoration:none;color:#A20055">Tainan</a></div>
	<div class="kaohsiung" id="kaohsiung"><a href="webkaohsiung.html" style="text-decoration:none;color:#A20055">Kaohsiung</a></div>
	</div>
	<div class="aboutus" id="aboutus"><a href="webaboutus.html" style="text-decoration:none;color:#A20055">About Us</a></div>
<div class="box">
<p>
<?php
$link=mysql_connect("localhost","root","8811") or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysql_select_db($link, "data"); //選擇資料庫abc
$sql = "SELECT * FROM data"; //在test資料表中選擇所有欄位
mysql_query($link, 'SET CHARACTER SET utf8'); // 送出Big5編碼的MySQL指令
mysql_query($link,  "SET collation_connection = 'utf8_general_ci'");
$result = mysql_query($link,$sql); // 執行SQL查詢
//$row = mysql_fetch_assoc($result); //將陣列以欄位名索引
//$row = mysql_fetch_row($result); //將陣列以數字排列索引
$total_fields=mysql_num_fields($result); // 取得欄位數
$total_records=mysql_num_rows($result);  // 取得記錄數
?>
</p>
<table border="1">
<tr>
<td>location</td>
<td>price</td>
<td>cp number</td>
</tr>
<?php for ($i=0;$i<$total_records;$i++) {$row = mysql_fetch_assoc($result); //將陣列以欄位名索引   ?>
<tr>
<td><?php echo $row[location];   ?></td>        <!–印出id欄位的值–>
<td><?php echo $row[price];   ?></td> <!–印出name欄位的值–>
<td><?php echo $row[cp_number]; ?></td>
</tr>
<?php    }   ?>
</table>
</div>
</body>
</html>
