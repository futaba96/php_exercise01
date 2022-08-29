<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));


for ($num = 0;$num <= 100; $num++)

if ($num % 2 == 0) {
    echo "{$num}は素数です";
} else {
    echo "{$num}は素数ではありません";
}
