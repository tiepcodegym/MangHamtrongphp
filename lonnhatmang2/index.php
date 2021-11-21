<?php
$arr = [
    [2, 45, 32, 4],
    [234, 1, 4, 8],
    [2, 89, -743],
];
$max=$arr[0][0];
$a=0;
$b=0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($arr[$i][$j]>$max){
            $max=$arr[$i][$j];
            $a=$i;
            $b=$j;
        }
    }
}
echo 'phần tử thứ '.($b+1).' của mảng thứ '.($a+1).' là phần tử lớn nhất, có giá trị là: '.$max;

