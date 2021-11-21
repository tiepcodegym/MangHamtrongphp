<?php
$arr1=[1,5,3,6,8,7,9,4];
$arr2=[1,9,6,7,8,4];
$arr=[];
for ($i=0;$i<count($arr1);$i++){
    array_push($arr,$arr1[$i]);
}
for ($i=0;$i<count($arr2);$i++){
    array_push($arr,$arr2[$i]);
}
var_dump($arr);