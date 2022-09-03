<?php

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = htmlspecialchars($_POST['age'], ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの作成</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" name="送信">
        </div>
    </form>

    <?
    if (isset($_POST['age']))
        echo  "<br>私は{$msg}歳です";
    ?>
</body>

</html>
