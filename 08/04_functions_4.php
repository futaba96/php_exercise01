<?php

function check_temperature($body_temperature)
{
    if ($body_temperature < 37.0) {
        return true;
    } else {
        return false;
    }
}

function create_message($body_temperature)
{
    $condition = check_temperature($body_temperature);

    if ($condition) {
        return 'あなたは平熱なので、問題なく参加できます';
    } else {
        return 'あなたは発熱しているので、参加できません';
    }
}
