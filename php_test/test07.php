<?php
echo "<pre>";
class BaseClass{
  function __construct(){
    echo "BaseClass类构造方法".PHP_EOL;
  }
}

class SubClass extends BaseClass{
    function __construct(){
      parent::__construct();
      echo "SubClass类构造方法" . PHP_EOL;
    }
  }

class OtherSubClass extends BaseClass {
  //继承BaseClass的构造方法
}

//调用BaseClass的构造方法
$obj = new BaseClass();
//调用BaseClass、SubClass构造方法
$obj = new SubClass();

$obj = new OtherSubClass();

?>
