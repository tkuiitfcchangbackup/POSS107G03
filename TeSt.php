<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p>
<?php
$link=mysqli_connect("localhost","88user","8811") or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link, "data"); //選擇資料庫abc
$sql = "SELECT location,price,cp_number FROM data"; //在test資料表中選擇所有欄位
mysqli_query($link,'SET CHARACTER SET utf8');	// 送出Big5編碼的MySQL指令
mysqli_query($link,"SET collation_connection 'utf8'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result);  // 取得記錄數
?>
</p>
<table  border="1" align="center">
<tr>
<td>Location</td>
<td>Price</td>
<td>Cp Number</td>
</tr>
<?php
for ($i=0;$i<$total_records;$i++) {$row = mysqli_fetch_assoc($result); //將陣列以欄位名索引
?>
<tr>
<td><?php echo $row[location];?></td>
<td><?php echo $row[price];?></td>
<td><?php echo $row[cp_number];?></td>
</tr>
<?php    }   ?>
</table>

</body>
</html>
