<!doctype html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
    echo '<p>Order processed at :' . date('H:i,jS F Y') . '</P>';
    echo '<br />';
      
    $tireqty = htmlspecialchars($_POST['tireqty']);
    $oilqty = htmlspecialchars($_POST['oilqty']);
    $sparkqty = htmlspecialchars($_POST['sparkqty']);

    $find = htmlspecialchars($_POST['find']);
    $distance = (float)htmlspecialchars($_POST['distance']);

    $address = $_POST['dizhi'];

    $document_root = $_SERVER['DOCUMENT_ROOT'];

    
    
   
    
    if($distance < 2.5){
      $freight = 2;
    }
    elseif($distance < 5){
      $freight = 10;
    }
    elseif($distance < 10){
      $freight = 25;
    }
    elseif($distance < 20){
      $freight = 50;
    }
    else{
      $feight = 80;
    }
    
    define('TIREPRICE' , 100);
    define('OILPRICE' , 10);
    define('SPARKPRICE' , 4);
    

    $product = array('Tire'=> $tireqty,
                'Oil'=> $oilqty,
                     'Spark Plugs'=> $sparkqty);
   
    $price[0] = $tireqty * TIREPRICE;
    $price[1] = $oilqty * OILPRICE;
    $price[2] = $sparkqty * SPARKPRICE;

    $document_root = $_SERVER['DOCUMENT_ROOT'];
    
    
    ?>

    <table style="border: 0px">
      <tr style="background: #cccccc; text-align:center;height:30px;">
        <td style="width: 150px; text-align: center;">商品</td>
        <td style="width: 120px; text-align: center;">数量/距离</td>
        <td style="width: 120px; text-align: center;">价格/运费</td>
      </tr>
      
      <?php
      $i = 0;
      $total = 0;
      foreach($product as $key=>$value){
        echo "<tr>
                 <td style='text-align: center';>$key</td>
                 <td style='text-align: center';>$value</td>
                 <td style='text-align: center';>￥$price[$i]</td>
              </tr>";
        $total = $total + $price[$i];
        $i = $i + 1;
      }

      $fp = fopen("$document_root/file/order.txt" , 'ab');
      if(!$fp){
        echo "Your order could not be processed. ";
        exit;
      }
      else{
        echo "Your order processed success.";
      }
      $outputstring = date('H:i,jS F Y') . "\t". $tireqty  . " tires \t" . $oilqty . " oils \t" . $sparkqty . " spark plugs \t" . 'address '. $address ."\t". '送货距离：' . $distance .  ' price_total ' . $total . '+' .$freight . "\n";

      flock($fp,LOCK_EX);
      fwrite($fp , $outputstring,strlen($outputstring));
      flock($fp,LOCK_UN);
      fclose($fp);
      ?>
      <tr>
        <td style="text-align:center">离我们</td>
        <td style="text-align:center;"><?php echo "$distance km"; ?> </td>
        <td style="text-align:center;"><?php echo "￥$freight" ?>
      </tr>
      <tr>
        <td style="text-align:center;">送货地址</td>
        <td colspan="2" style="text-align:center;"><?php echo $address;  ?></td>
      </tr>
      <tr style="background: #E56E6E; height:30px;">
        <td style="text-align:center;">从哪里得知的Bob</td>
        <td colspan="2" style="text-align:center;">
          <?php
          switch($find){
            case "a":
              echo "Regular customer";
              break;
            case "b":
              echo "Customer reffered by advertising TV";
              break;
            case "c":
              echo "Customer refferd by phone directory";
              break;
            case "d":
              echo "Customer reffered by word of mouth";
              break;
            default :
              echo "We do not know how this customer know us.";
              break;
          }
          ?>
        </td>
      </tr>
      <tr>
        <td colspan =" 3" style="text-align: center; background: #cccccc">
          <?php
          echo "总价为：￥$total + ￥$freight";
          ?>
        </td>
      </tr>
    </table>
    <a href="vieworder.php">查看订单</a>
  
  </body>
</html>
