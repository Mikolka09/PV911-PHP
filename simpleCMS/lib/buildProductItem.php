<?php


function buildProductItem(){

    $img = "/PV911-PHP/simpleCMS/design/img/970x647/01.jpg";
    $url = "#";
    $name = "Продукт 1";
    $category = "Менеджмент";
    $text = " Текстовое описание";

    include (__DIR__ . "/../template/widgets/productItem.php");

    $img = "/PV911-PHP/simpleCMS/design/img/970x647/02.jpg";
    $url = "#";
    $name = "Продукт 2";
    $category = "Менеджмент";
    $text = " Текстовое описание";

    include (__DIR__ . "/../template/widgets/productItem.php");

}


