<!doctype html>
<html>
  <head>
    <title>数组</title>
    <meta charset="utf-8" />
  </head>
  <body>
     <h1>数组测试1</h1>
     <?php
     $cars=array("Volvo","BMW","Toyota");
$len=count($cars);

for($x=0; $x<$len;$x++){
    echo $cars[$x];
    echo "<br>";
}
     ?>
  </body>
</html>
