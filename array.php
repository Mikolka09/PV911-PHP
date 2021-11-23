<?php

$arr = [];
$arr1 = ["key"=>"val"];
$arr2 = array("key"=>"val");

$arr["key"] = "val";

array_push($arr, "element 0");
array_push($arr, "element 1");
array_push($arr, "element 2");

$arr["key2"] = "val2";

array_push($arr, "element 3");
array_push($arr, "element 4");

class A{
    public $a=10;
}

$obj = new A;
$arr["class"] = $obj;

$arr["arr"] = array(1,2.3);

//echo $arr; так не выводит массив

/*array_pop($arr);

print_r($arr);

array_shift($arr);

print_r($arr);*/

echo "Оригинал: \n";
print_r($arr);

/*if(isset($arr[50])){
    echo "50 доступен";
}else{
    echo "50 не доступен";
}*/

//Плохой вариант обхода массива - допустим если ключи - это точно числа
/*for($i=0; $i<sizeof($arr); $i++){
    echo "\n". $i . $arr[$i];
}*/

/*foreach ($arr as $key => $value){
    echo "\n" . $key . " " . $value;
}*/

/*if(is_array($arr)){ echo "Это массив \n";}
if(is_iterable($arr)){ echo "Это итерируемый \n";}*/