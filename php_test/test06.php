<?php
class MyClass {
  const constant ="常量";

  function showConstant(){
    echo $this->constant;
  }
}

$class = new MyClass;
$class->showConstant();

?>
