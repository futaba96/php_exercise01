<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

$judge= true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $judge = false;
    }
}

if ($judge) {
    echo $num . "は素数です。";
} else {
    echo $num . "は素数ではありません。";
}
