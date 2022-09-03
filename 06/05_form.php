<?php

$num1 = '';
$num2 = '';
$num3 = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = htmlspecialchars($_POST['number1'], ENT_QUOTES, "UTF-8");
    $num2 = htmlspecialchars($_POST['number2'], ENT_QUOTES, "UTF-8");
    $num3 = htmlspecialchars($_POST['number3'], ENT_QUOTES, "UTF-8");

    if (empty($msg)) {
        $err_msg = '全てに数字を入力してください';
    }
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
            <?php if (is_numeric($num1 && $num2 && $num3)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つ目の数字</label><br>
            <input type="text" name="number1">
        </div>
        <div>
            <label for="">2つ目の数字</label><br>
            <input type="text" name="number2">
        </div>
        <div>
            <label for="">3つ目の数字</label><br>
            <input type="text" name="number3">
        </div>
        <div>
            <input type="submit" name="送信">
        </div>
    </form>
    <?
    $sum = $num1 + $num2 + $num3;
    echo '合計値は' . htmlspecialchars($sum) . 'です';

    ?>

</html>
