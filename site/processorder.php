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
	$find = $_POST['find'];

	echo "<p>Your order is as follows: </p>";
	echo htmlspecialchars($tireqty) . " tires <br />";
	echo htmlspecialchars($oilqty) . " oils  <br />";
	echo htmlspecialchars($sparkqty) . " spark plugs <br />";

	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);

	$totalqty = 0;
	$totalqty= $tireqty + $oilqty + $sparkqty;
	$total = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;



	if($totalqty == 0){
	    echo "<p style='color:red'>";
	    echo "你没有购买任何商品！";
	}else{
	    echo "<p>你总共购买了: " . $totalqty . " 件商品。 " . "总价为： ￥".  $total . "<br />";
	}
	switch($find){
	    case "a" :
	    echo "<p>Regular customer . </p>";
	    break;
	    case 'b' :
	    echo  "<p>Customer referred by TV advert . </P>";
	    break;
	    case 'c' :
	    echo "<p>Customer referred by phone directory . </p>";
	    break;
	    case 'd' :
	    echo  "<p>Customer referred by word of mouty . </p>";
	    break;
	    default :
	    echo "<p>We do not know how this customer found us . </p>";
	    break;
	}
	?>
    </body>
</html>
