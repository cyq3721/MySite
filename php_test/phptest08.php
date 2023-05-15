<?php
//print_r($_SERVER);
foreach($_SERVER as  $key => $value){
    echo $key . '=>' . $value . '<br>';
    }
echo '<br>';
foreach($_ENV as $key => $value){
    echo $key . '=>' . $value . '<br>';
}
?>
