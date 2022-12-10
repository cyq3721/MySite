<?php
function reverse_r($str){
  if(strlen($str)>0){
    reverse_r(substr($str,1));  //递归
  }
  echo substr($str,0,1);
  return;
}

reverse_r("Hello!");
?>

