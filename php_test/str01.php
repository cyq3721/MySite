<!doctype html>
<html>
  <head>
    <title>str_test01</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>str_test01</h1>
    <?php
    $str1 = "Hello China!";
$length = strlen($str1);
echo "字符串的长度为：" . $length;
echo "<br />";
echo strpos($str1,"lo" );
    ?>
  </body>
</html>
