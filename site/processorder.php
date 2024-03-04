<!doctype html>
<html>
    <head>
	<title>Bob's Auto Parts - Order results </title>
	<meta charset="utf-8" />
    </head>
    <body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
        <?php
	echo "<p>Order processed. at: ";
	echo date('H:i,jS F Y');
	echo "</p>";

	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];

	echo "<p>Your order is as follows: </p>";
	echo htmlspecialchars($tireqty) . " tires <br />";
	echo htmlspecialchars($oilqty) . " oils  <br />";
	echo htmlspecialchars($sparkqty) . " spark plugs <br />";
	?>
    </body>
</html>
