<!doctype html>
<html>
    <head>
	<title>连接数据库</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<h1>数据库连接测试</h1>
	<?php
	$ip = "localhost";
	$user = "root";
	$pass = "cyq1980112";

	$link = mysqli_connect($ip,$user,$pass);

	if(!$link){
	    die('连接失败!' . mysqli_error());
	}
	echo "<h3>连接数据库成功！</h3>";
	?>
    </body>
</html>
