<?php

echo '$scoreの値を入力して下さい: ';
$score = trim(fgets(STDIN));

if ($score >= 60) {
    echo '合格です';
} elseif ($score >= 30 && $score < 60) {
    echo '追試です';
} else {
    echo '不合格です';
}
