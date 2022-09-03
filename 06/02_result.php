<?php

$names = $_POST['message'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '私の名前は' . htmlspecialchars($names) . 'です';
}
echo '<br><br><a href="' . $_SERVER['HTTP_REFERER'] . '">戻る</a>';
