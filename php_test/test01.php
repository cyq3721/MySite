<?php
$x = 5.9;
$y = 6;

function myTest(){
  global $x, $y;
  $y = $x + $y;
}

function myTest2(){
  $GLOBALS['x'] = $GLOBALS['x'] + 10;
  $GLOBALS['y'] = $GLOBALS['x'];
  
}
myTest();
echo $y;
echo "</br>";
myTest2();
echo  "$y </br>";

function myTest3(){
  static $a = 0 ;
  echo $a;
  $a++;
  echo PHP_EOL;
}
$s = 5;
while($s>=0)
{
  myTest3();
  $s--;
}
echo "<br>";
var_dump($x);
?>
