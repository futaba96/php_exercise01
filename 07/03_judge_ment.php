<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <?
    if ($_GET['score'] < 60) {
        echo '<h1>不合格です</h1>';
    }
    if ($_GET['score'] >= 60) {
        echo '<h1>合格です</h1>';
    }
    ?>

    <br><a href="03_form2.php">戻る</a>
</body>

</html>
