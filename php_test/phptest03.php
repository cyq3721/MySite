<!doctype html>
<html>
    <head>
	<title>使用循环嵌套输出表格</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<table align="center" border="1" width="600">
	    <caption><h1>使用while循环嵌套输出表格</h1></caption>
	    <?php
	    $raw = 0 ;
	    while($raw < 10){
		$bgcolor = $raw % 2 == 0 ? "#FFFFFF" : "#DDDDDD" ;
		echo "<tr bgcolor=" . $bgcolor . ">";
		$list = 0;
		while($list < 10 ){
		    echo "<td>" . ($raw * 10 + $list) . "</td>";
		    $list++;
		}
		echo "</tr>";
		$raw++;
	    }
	    
	    ?>
	    
	</table>
    </body>
</html>
