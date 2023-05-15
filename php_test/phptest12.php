<?php
class Person{
    //声明成员属性
    var $name;
    var $sex;
    var $age;

    //声明成员方法
    function say(){
        echo "这个人在说话<br>"; 
    }
    function run(){
        echo "这个人在走路<br>";
    }
}
    //实例化类
    $person1 = new Person();
    $person2 = new Person();
    $person3 = new Person();

    $person1->name = "李四";
    $person1->sex = "男";
    $person1->age = 20;

    $person1->name = "王五";
    $person1->sex = "男";
    $person1->age = 40;

    $person1->name = "张三";
    $person1->sex = "女";
    $person1->age = 30;

    echo "person1对象的名称是：". $person1->name. "<br>";


?>
