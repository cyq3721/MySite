<!doctype html>
<html>
    <head>
	<title>Uploading ... </title>
	<meta charset="utf-8" />
    </head>
    <body>
	<h1>Uploading File ... </h1>

	<?php
	include "excel_php.php";
	?>
	<table border="1" >
	    <?php
	    $i = 1;
	    while ($i <= $highestRow){
		$cell_a = 'a' . $i;
		$cell_b = 'b' . $i;
		$cell_c = 'c' . $i;
		$cell_d = 'd' . $i;
		echo '<tr>';
		echo '<td align="center"> ';
		echo $worksheet->getCell('a'.$i);
		echo '</td/>';
		echo '<td align="center">';
		echo $worksheet->getCell($cell_b);
		echo '</td/>';
		echo '<td align="center">';
		echo $worksheet->getCell($cell_c);
		echo '</td/>';
		echo '<td align="center">';
		echo $worksheet->getCell($cell_d);
		echo '</td/>';

		echo '</tr>';
		$i = $i + 1;
	    }
	    
	    ?>
	</table>
    </body>
</html>
