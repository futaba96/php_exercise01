<?php
$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['age'];

    if (empty($msg)) {
        $err_msg = '年齢を入力してください';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>バリデーションの作成</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label>
            <input type="text" name="age" value="<?= $msg ?>">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>

    </form>
    <?
    if (isset($_POST['age']))
        echo "\n私は{$msg}歳です";
    ?>
</body>

</html>
