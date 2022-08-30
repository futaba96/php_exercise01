<?php

$poket_money = 1000;
$fund_raising = 101;

do {
    $poket_money = $poket_money - $fund_raising;
    echo "101円募金しました。\n残り残高は{$poket_money}です\n";
} while ($poket_money > $fund_raising);

if ($poket_money < $fund_raising) {
    echo "あなたはこれ以上募金できません｡";
}
