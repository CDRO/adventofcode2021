<?php

$fp = fopen('input_02.txt', 'r');

$x = 0;
$y = 0;
while($line = fgetcsv($fp, '4098', ' ')) {
    if($line[0] === 'forward') {
        $x += (int)$line[1];
    }
    if($line[0] === 'up') {
        $y -= (int)$line[1];
    }
    if($line[0] === 'down') {
        $y += (int)$line[1];
    }
}

echo ($x * $y) . PHP_EOL .  PHP_EOL;

rewind($fp);

$aim = $x = $y = 0;

while($line = fgetcsv($fp, '4098', ' ')) {
    if($line[0] === 'up') {
        $aim -= (int)$line[1];
    }
    if($line[0] === 'down') {
        $aim += (int)$line[1];
    }
    if($line[0] === 'forward') {
        $x += (int)$line[1];
        $y += (int)$line[1] * $aim;
    }
}

echo ($x * $y) . PHP_EOL .  PHP_EOL;
