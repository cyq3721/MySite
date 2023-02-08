<?php
$os = array("Mac","Linux","WinXP","Win10","Win11");
if(in_array("Mac",$os)){
    echo "包含";
}
echo '<br>';
if(in_array("linux",$os)){
    echo "包含";
}else{
    echo "不包含";
}

?>
