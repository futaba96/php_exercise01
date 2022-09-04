<?php

$names = $_POST['message'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '私の名前は' . htmlspecialchars($names) . 'です';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>別のファイルへ</title>
</head>

<body>
    <br><br><a href="02_form.php">戻る</a>
</body>
