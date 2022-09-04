<?php
$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];

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
            <input type="text" name="age" value="<?= $age ?>">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>

    </form>

    <?php if (!empty($age)) : ?>
        <p>私は<?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>歳です</p>
    <?php endif; ?>

</body>

</html>
