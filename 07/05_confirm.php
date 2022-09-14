<?php

$prices = [
    'バッグ' => 1500,
    '靴' => 3000,
    '時計' => 6000,
    'ネックレス' => 9000,
    'ピアス' => 10000
];

$purchase_item = $_GET['purchase_item'];
$payment = $prices[$purchase_item];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>ご注文ありがとうございます</h2>
    <!-- // コードを追記 -->
    <?php echo "<h2>お支払金額は{$payment}円です</h2>"; ?>
    <br><a href="05_form2.php">戻る</a>

</body>

</html>
