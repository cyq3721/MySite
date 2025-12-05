
<!doctype html>
<html>
  <head>
    <title>Bob's Part -- View Order</title>
    <meta charset="utf-8" />
    <style type="text/css">
     table,th,td {
       border-collapse: collapse;  
       border: 1px solid black;
       padding:6px;
     }
     th {
       background: #ccccff;
     }
    </style>
  </head>
  <body>
    <h1>Bob's Auto Part</h1>
    <p>Customer Order</p>

    <?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $fp = fopen("$document_root/file/order.txt", "rb");   //打开文件
    flock($fp,LOCK_SH);  //锁定文件
    if(!$fp){   //测试文件打开是否成功
      echo "<p>No order pending</p>";
    }
    while(!feof($fp)){   //利用fgets（） 逐行读取文件
      $order = htmlspecialchars(fgets($fp));
      echo $order . "<br />";
    }
    flock($fp,LOCK_UN);
    fclose($fp);
    echo "-----------------------------<br />";

    

    $order = file("$document_root/file/order.txt");
    $number_of_order = count($order);
    if($number_of_order == 0){
      echo "<p>No order pending <br />
               Please try again later. </p> ";
      exit;
    }
    ?>

    <table>
      <tr>
        <th>Order Date</th>
        <th>Tires</th>
        <th>Oil</th>
        <th>Spark Pllugs</th>
        <th>Address</th>
      </tr>
    
    <?php
    for ($i = 0 ; $i < $number_of_order; $i++){
      $line = explode("\t",$order[$i]);
      echo "<tr>
              <td>" . $line[0] ."</td>".
             "<td>" . intval($line[1]) ."</td>".
             "<td>" . intval($line[2]) ."</td>".
             "<td>" . intval($line[3]) ."</td>".
             "<td>" . $line[4] ."</td>".
           "</tr>";
    }
    ?>
    </table>  
    
  </body>
</html>
