<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
<form action="" method="post">
    <input type="text" name="inp">
    <p>Mỗi phần tử cách nhau một dấu cách</p>
    <input type="submit" value="Gửi">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $str=$_POST['inp'];
    $arr=explode(' ',$str);
    $min=$arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] > $min) {
                $min = $arr[$i];
            }
        }
    echo 'Số nhỏ nhất là: '.$min;
}
?>
</body>
</html>