<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {


    switch ($subject) {
        case '数学':
            $msg = '明日';
            break;

        case '英語':
            $msg = '明後日';
            break;

        case '理科':
            $msg = '明々後日';
            break;

        case '社会':
            $msg = '昨日';
            break;

        case '国語':
            $msg = '中止';
            break;
    }
    echo "{$subject}の試験は{$msg}です。" . PHP_EOL;
}
