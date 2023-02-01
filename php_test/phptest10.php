<?php
function myfun($var){
    if($var%2 == 0)
        return true;
}
$filter = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);
print_r($filter);
echo '<br>';
print_r(array_filter($filter,"myfun"));
?>
