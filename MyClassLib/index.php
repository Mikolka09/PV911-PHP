<?php

spl_autoload_register(function ($class_name){
    echo  "<br> Ищу класс " . $class_name ."</br>";
    require_once __DIR__ ."/" . $class_name . '.php';
});

//require_once ("MyFirstClass.php");
//require_once ("Child1.php");

//\MyFirstNameSpace\MyFirstClass::MyFun();
$h = new \Matios\Mykola\Hello();

/*$obj= new \MyFirstNameSpace\MyFirstClass();
$c = new \MyFirstNameSpace\Child1();*/

