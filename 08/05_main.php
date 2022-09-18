<?php

$week = ["日", "月", "火", "水", "木", "金", "土"];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dates = date('Y年m月d日');
    $today = $week[date("w")];

}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>標準関数</title>
</head>

<body>

</body>
<?php if (empty($dates)) : ?>
    <h2>本日の日付、曜日を確認しますか？</h2>

    <form action="" method="POST">
        <input type="submit" value="はい">
    </form>
<?php else : ?>

    <h1>今日は、<?= $dates . $today ?>曜日です</h1>
    <a href="">戻る</a>
<?php endif; ?>

</body>

</html>
