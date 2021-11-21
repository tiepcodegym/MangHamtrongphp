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
    <p>Nhập phần tử cần đếm</p>
    <button>đếm</button>
</form>
<?php
$str='thanh dep trai vkl';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $num=$_POST['inp'];
    $count=0;
    for ($i=0;$i<strlen($str);$i++){
        if ($num==$str[$i]){
            $count++;
        }
    }
    echo $num.' xuất hiện '.$count.' lần';
}
?>
</body>
</html>