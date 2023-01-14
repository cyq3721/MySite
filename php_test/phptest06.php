<?php
$wage = array (
    "市场部" => array(
        array(1,"高某","市场部经理",5000.00),
        array(2,"洛某","职员",3000.00),
        array(3,"峰某","职员",2400.00)
    ),
    "产品部" => array(
        array(1,"李某","产品部经理",6000.00),
        array(2,"周某","职员",4000.00),
        array(3,"吴某","职员",3200.00)
    ),
    "财务部" => array(
        array(1,"郑某","财务部经理",4500.00),
        array(2,"王某","职员",2000.00),
        array(3,"冯某","职员",1500.00)
        )
);
      print_r($wage["市场部"]);
foreach($wage as $sector => $table){
    echo '<tabel border="1" width="600" align="center">';
    echo '<caption><h2>' . $sector . '十月份工资表</h2></caption>';
    echo '<tr bgcolor="#dddddd"><th>编号</th><th>姓名</th><th>职务</th><th>工资</th></tr>';
    echo '</table>';
}
?>
