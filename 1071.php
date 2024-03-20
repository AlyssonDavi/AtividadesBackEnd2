<?php

function soma_impar($x, $y) {
    if ($x > $y) {
        [$x, $y] = [$y, $x];
    }
    $sum = 0;
    
    for ($i = $x + 1; $i < $y; $i++) {
        if ($i % 2 !== 0) {
            $sum += $i;
        }
    }
    return $sum;
}

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$sum = soma_impar($x, $y);

echo $sum . PHP_EOL;

?>