<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

if ($operator = $_GET['operator'] && 'addition') {
    echo "{$num1} + {$num2}";
} elseif (($operator = $_GET['operator'] && 'subtraction	'))
    echo "{$num1} - {$num2}";
