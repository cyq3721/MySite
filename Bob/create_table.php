<?php
function create_table($data, $header = NULL, $caption = NULL){
  echo '<table border="1">';
  if($caption){
    echo "<caption>$caption</caption>";
  }
  if($header){
    echo "<tr><th>$header</th></tr>";
  }
  reset($data);     //重置数组指针
  $value = current($data);
  while($value){
    echo "<tr><td>$value</td></tr>";
    $value = next($data);   //数组指针指向下一个元素
  }
  echo '</table>';
}

$my_data = ['First piece of data', 'Second piece of data', 'And the third'];
$my_header = '表格标题';
$my_caption = 'Data about something';

//调用函数
create_table($my_data,$my_header , $my_caption);
?>
