<!doctype html>
<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
    <meta charset="utf-8" />
    <link href="./css/Bob.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <p>Order processed at:
      <?php
      echo date('H:i, js F Y');
      
      $tireqty =htmlspecialchars($_POST['tireqty']);
      $oilqty = htmlspecialchars($_POST['oilqty']);
      $sparkqty = htmlspecialchars($_POST['sparkqty']);

      $total = $tireqty + $oilqty + $sparkqty;
      ?>
    </p>
    <form id="form" method="POST"></form>
    <table>
      <tr>
        <th class="caption1">商品</th>
        <th class="caption2">数量</th>
        <th class="caption2">售价</th>
      </tr>
      <tr>
        <td >Oil</td>
        <td class="value">
          <?php echo $oilqty; ?>
        </td>
        <td>
          <input name="oil_price" type="text" placeholder="请输入Oil的单价" for="form">
        </td>
      </Tr>
       <tr>
        <td>Tire</td>
        <td class="value">
          <?php echo $tireqty; ?>
        </td>
        <td>
          <input name="tire_price" type="text" placeholder="请输入Tire的单价" for="form">
        </td>
       </tr>
        <tr>
        <td>Spark Plug</td>
        <td class="value">
          <?php echo $sparkqty; ?>
        </td>
        <td>
          <input name="spark_price" type="text" placeholder="请输入Spark的单价" for="form">
        </td>
        </tr>
        <tr>
          <th class="caption1">总数</th>
          <th class="caption2">
            <?php echo $total; ?>
          </th>
          <?php
          $oil_price = $_POST['oil_price'];
          $tire_price = $_POST['tire_price'];
          $spark_price = $_POST['spark_price'];
          $total_price = $oil_price + $tire_price + $spark_price;
          ?>
          <th class="caption2">
            <?php echo $total_price; ?>
          </th>
        </tr>
        
        
    </table>
  </body>
</html>

