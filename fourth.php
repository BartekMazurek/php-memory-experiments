<?php

$start = microtime(true);

for ($i = 0; $i < 10000000; $i++) {
    $a = 'a'.$i;
    unset($a);
}

$elapsed = microtime(true) - $start;

echo "Seconds: ".$elapsed.PHP_EOL;