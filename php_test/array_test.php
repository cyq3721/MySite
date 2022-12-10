<!doctype html>
<html>
  <head>
    <title>PHP_ARRAY TEST</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1> PHP_ARRAY TEST</h1>
    <h3>foreach()循环：</h3>
    <?php
    $week =
      ['Monday','Tuesday','Wedensday','Thursday','Friday','Saturday','Sunday'];
   // sort($week);
    foreach($week as $day){
      echo 'Today is :' . $day . '<br />';
    }
    ?>
    <h3>each()结构</h3>
    <?php
    $week = ['周一'=>'monday',
             '周二'=>'tuesday',
             '周三'=>'wedensday',
             '周四'=>'thursday',
             '周五'=>'friday',
             '周六'=>'saturday',
             '周日'=>'sunday'];

    for  each($week as $ch => $en){
      echo $ch . '-' . $en . "<br />";
    }
    reset($week);
    while($day = each($week)){
      echo $day['key']. '--' . $day['value'];
      echo "<br />";
    }
function myFun($i){
    echo $i;
    }
myFun(36);
    ?>
    
  </body>
</html>
