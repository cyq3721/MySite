<!doctype html>
<html>
    <head>
	<title>process message</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<?php
	include "db_conn.php";
	function ChangeWord($NewWord){
	    //将enter转化为<br>
	    $NewWord = srt_replace("\r\n", "<br>",  $NewWord);
	}
	?>
    </body>
</html>
