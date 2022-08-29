<?php

echo '$pointの値を入力して下さい: ';
$point = trim(fgets(STDIN));

if ($point % 2 == 0 ) {
    echo "{$point}は偶数です";
} else {
    echo "{$point}は奇数です";
}
