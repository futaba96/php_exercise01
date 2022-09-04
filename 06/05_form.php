<?php

$num1 = '';
$num2 = '';
$num3 = '';

$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $sum = $num1 + $num2 +  $num3;
}

if (!is_numeric($num1 || $num2 || $num3)) {
    $err_msg = '全てに数字を入力してください';
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>複数のフォーム</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つ目の数字</label><br>
            <input type="text" name="num1">
        </div>
        <div>
            <label for="">2つ目の数字</label><br>
            <input type="text" name="num2">
        </div>
        <div>
            <label for="">3つ目の数字</label><br>
            <input type="text" name="num3">
        </div>
        <div>
            <input type="submit" name="送信">
        </div>
    </form>

    <?php if (!empty($sum)) : ?>
        <p>合計値は <?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>です</p>
    <?php endif; ?>

</html>
