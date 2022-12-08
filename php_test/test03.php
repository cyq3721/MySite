<?php
$cars = array("Volvo","BMW","Toyota");
$arrlength = count($cars);

for($i = 0; $i < $arrlength; $i++){
  echo $cars[$i];
  echo "<br>";
}

$age = array("Petter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $key=>$value)
{
  echo "$key => $value <br>";
  
}
// 冒泡排序
  $arr = array(5,6,2,14,35,1,9,3,11);
     $len = count($arr);
     for ($i=0; $i<$len-1; $i++)
     {
     for ($j=$i+1;$j<$len;$j++){
     if($arr[$i] > $arr[$j])
     {
     $tem = $arr[$i];
     $arr[$i] = $arr[$j];
     $arr[$j] = $tem;
     }
     } 
     }

     for($i=0;$i<$len;$i++){
     echo "$arr[$i]  ";
     } 

echo "<br>";
echo " 这是第" . __LINE__ . "行！";
echo " 本代码文件为：" . __file__;
function my(){
  echo __FUNCTION__;
}
my();
?>
