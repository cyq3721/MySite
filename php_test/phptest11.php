<?php
function myfun($value, $key, $p){
    echo "$key $p $value <br>";
}

$lamp = array('a'=>'Linux','b'=>'Apache','c'=>'MySQL','d'=>'PHP');
array_walk($lamp,'myfun','has the value');
?>
