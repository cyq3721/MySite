<?php
function table($tablename, $rows, $cols){
    echo "<table align='center' border='1' width='600'>";
    echo "<caption><h1>$tablename</h1></caption>";

    for($out = 0; $out < $rows; $out++){
        $bgcolor = $out%2 == 0 ? "#FFFFFF" :"#DDDDDD";
        echo "<tr bgcolor=" . $bgcolor . ">";

        for($in = 0; $in < $cols; $in++){
            echo "<td>". ($out * $cols + $in)."</td>";
            }
        echo "</tr>";
        }
    }

table("第一个3行4列的表格",3,4);
?>
