<?php
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

$tireprice = 24.0;
$oilprice = 180.0;
$sparkprice = 30.0;

define('TIREPRICE',24);
define('OILPRICE',180);
define('SPARKPRICE',30);
define('RATE',0.15);

$total = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
$total_rate = $total*(1+RATE);
echo(gettype($tireprice));
settype($tireprice,'float');
echo (gettype($tireprice));

?>
<!doctype html>
<html>
    <head>
        <title>Bob's Auto Parts -- Order Results</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div style="text-align:center;">
            <h1>Bob's Auto Parts</h1>
            <h3>Order Results</h3>
            <hr>
            <p>
                Order processed at:
            <?php echo date('H:i, JS F Y'); ?>
            </p>
            <table style="text-align:center;border:0px;">
                <tr style="background:#cccccc;">
                    <td style="width:150px;">Item</td>
                    <td style="width:20px;">number</td>
                    <td style="width:20px;">price</td>
                </tr>
                <tr>
                    <td>Tires</td>
                    <td>
                        <?php echo $tireqty; ?>
                    </td>
                    <td>
                        <?php echo "￥".($tireprice)*($tireqty); ?>
                    </td>
                </tr>
                <tr>
                    <td>Oill</td>
                    <td>
                        <?php echo $oilqty; ?>
                    </td>
                    <td>
                        <?php echo "￥".($oilprice)*($oilqty); ?>
                    </td>
                </tr>
                <tr>
                    <td >SparkPlugs</td>
                    <td>
                        <?php echo $sparkqty; ?>
                    </td>
                    <td>
                        <?php echo "￥".($sparkprice)*($sparkqty); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="background:#bbccaa; text-align:center;" >
                        <?php echo "总计：". $total; ?>
                    </td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align:center;background:#aabbcc;">
<?php echo "税后总计：" . number_format($total_rate,2); ?>
                  </td>
                </tr>
            </table>
            <?php
     if($total == 0){
         echo '<p style="background:green;">你没有购买任何商品 </p>';
            }
                        ?>
        </div>
    </body>
</html>
