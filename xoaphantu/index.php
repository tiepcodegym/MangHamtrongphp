<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="inp"><br>
    <p>Nhập phần tử cần xóa</p>
    <button>xóa</button>
</form>
<?php
$arr=[0,1,5,8,7,6,1,5,4,8,6,4,6];
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $num=$_POST['inp'];
    for ($i=0;$i<count($arr);$i++){
        if ($num==$arr[$i]){
            array_push($arr,0);
            array_splice($arr,$i,1);
        }
    }
    var_dump($arr);
}
?>
</body>
</html>