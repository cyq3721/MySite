<!doctype html>
<html>
  <head>
    <title>遍历数组</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>foreach遍历数组</h1>
    <?php
     $stu = array("yuwen"=>"76","shuxue"=>"87","waiyu"=>"82");
foreach($stu as $x=>$value){
    echo "科目：" . $x ." 成绩：" . $value ."<br>";
}
    ?>
  </body>
</html>
