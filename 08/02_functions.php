<?php

function calc_cal($total_meals)
{
    $kcal = array_sum($total_meals);

    return "摂取カロリー合計は{$kcal}です";
}
