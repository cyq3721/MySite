<!doctype html>
<html>
    <head>
	<title>phptest01-获取服务器信息</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<?php
	$sysos = $_SERVER["SERVER_SOFTWARE"];    //获取服务器标识
	$sysversion = PHP_VERSION;
	$os = PHP_OS;
	echo $syson;
	echo "<br />";
	echo $sysversion;
	echo "<br />";
	echo $os;
	echo __FILE__;
	?>
    </body>
</html>
