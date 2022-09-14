<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];
}

if (empty($name)) {
    $err_msgs[] = '氏名を入力してください';
}
if (empty($tel)) {
    $err_msgs[] = '電話番号を入力してください';
}
if (empty($email)) {
    $err_msgs[] = 'メールアドレスを入力してください';
}
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
    <h3>個人情報を入力してください</h3>

    <!-- // コードを追記 -->

    <?php if (!empty($err_msgs)) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <!-- // コードを追記 -->

        <div>
            <label for="name">氏名</label><br>
            <input type="text" name="name" id="name" value="<?= $name ?>">
        </div>
        <div>
            <label for="tel">電話番号</label><br>
            <input type="number" name="tel" id="tel" value="<?= $tel ?>">
        </div>
        <div>
            <label for="email">メールアドレス</label><br>
            <input type="email" name="email" id="email" value="<?= $email ?>">
        </div>

        <h3>購入するものを選択してください</h3>
        <select name="item_key">
            <option value=""></option>
            <?php
            foreach ($items as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>

        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

    <!-- // コードを追記 -->

    <?php
    if (!empty($name) && ($tel) && ($email) && ($item_key)) {
        echo "<h3>以下の内容が送信されました</h3>";
        echo "氏名:  $name" . '<br>';
        echo "電話番号: $tel" . '<br>';
        echo "メールアドレス:  $email" . '<br>';
        echo  "購入するもの:  $item_key" . '<br>';
    }
    ?>

</body>

</html>
