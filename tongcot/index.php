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
    <input type="number" name="inp">
</form>
<?php
$arr = [
    [1, 2, 5, 8, 77, 9, 5],
    [1, 8, 77, 5],
    [1, 2, 77, 9, 5],
    [1, 2, 8, 77, 9, 5]
];
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $num=$_POST['inp'];
    $s=0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($j+1==$num){
                $s+=$arr[j];
            }
        }
    }
}
echo $s;
?>
</body>
</html>
