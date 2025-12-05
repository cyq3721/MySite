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

	$link =new mysqli($ip,$user,$pass);

	if(mysqli_connect_errno()){
	    die('连接失败!' );
	    exit;
	}
	echo "<h3>连接数据库成功！</h3>";
	?>
    </body>
</html>
