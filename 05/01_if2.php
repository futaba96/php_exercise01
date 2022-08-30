<?php

$poket_money = 1000;
$fund_raising = 101;

while ($poket_money > $fund_raising) {

    $poket_money = $poket_money - $fund_raising;
    echo "101円募金しました。\n残り残高は{$poket_money}円です\n";
}

echo "あなたはこれ以上募金できません｡";
