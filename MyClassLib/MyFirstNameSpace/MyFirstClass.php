<?php

namespace MyFirstNameSpace;

class MyFirstClass
{
    function Method(){

    }
    public function MethodPublic(){

    }

    public static function MyFun(){
        echo "<br>Test Static<br>";
    }

    public function __construct()
    {
        echo "Запустился конструктор";
    }

    function __destruct(){
        print "Уничтожается" . __CLASS__ ."\n";
    }
}