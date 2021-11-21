<?php
function add($arr, $j, $i)
{
    array_push($arr, $_POST['inp1']);
    if ($j == $_REQUEST['num']) {
        $j = 0;
        $i++;
        if ($i== $_REQUEST['num']){
            calcu($arr);
        }
    }else {
        $j++;
        inpp($i,$j,$arr);
    }
}
function inpp($i, $j, $arr)
{
    echo '<p> Phần tử thứ ' . ($j + 1) . ' của hàng thứ ' . ($i + 1) . ' là: </p><br>';
    echo '<input name="inp1" type="number">';
    echo '<button onclick="add(' . $arr.','.$j.','.$i .')">Add</button>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['inp'];
    $i = 0;
    $j = 0;
    $arr = [];
    inpp($i,$j,$arr);
}

function calcu($arr){
    echo 'baka';
}
?>