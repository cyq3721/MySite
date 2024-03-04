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

	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);

	$totalqty = 0;
	$total = $tireqty + $oilqty + $sparkqty;

	echo "<p>你总共购买了: " . $totalqty . "<br />";
	?>
    </body>
</html>
