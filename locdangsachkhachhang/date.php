<?php
$arr = [
    '1' => [
        'name' => 'Đặng Ngọc Thành',
        'Date' => '09/12/2003',
        'Adress' => 'Phú Thọ',
        'Image' => 'dnt.jpg',

    ],
    '2' => [
        'name' => 'Vũ Thùy Linh',
        'Date' => '12/04/2005',
        'Adress' => 'Phú Thọ',
        'Image' => 'linh.jpg'
    ],
    '3' => [
        'name' => 'Bùi Thị Hồng Linh',
        'Date' => '12/04/2004',
        'Adress' => 'Phú Thọ',
        'Image' => 'hlinh.jpg',

    ], '4' => [
        'name' => 'Bùi Thị Hồng Linh',
        'Date' => '12/04/2004',
        'Adress' => 'Phú Thọ',
        'Image' => 'hlinh1.jpg',

    ]
]
?>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}
$newArr=searchByDate($arr,$fromDate,$toDate);
function searchByDate($arr, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $arr;
    }
    $newArr = [];
    foreach ($arr as $value) {
        if (strtotime($value['Date']) < strtotime($fromDate))
        continue;
        if (strtotime($value['Date']) > strtotime($toDate))
        continue;
        $newArr[]=$value;
    }
    return $newArr;
}
?>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($newArr as $key => $value): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['Date']; ?></td>
            <td><?php echo $value['Adress']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $value['Image']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<button><a href="list.php">exit</a></button>


