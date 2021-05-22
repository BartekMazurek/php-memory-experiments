<?php

$start = microtime(true);

for ($i = 0; $i < 10000000; $i++) {
    $a = 'a'.$i;
    $a = null;
}

$elapsed = microtime(true) - $start;

echo "Seconds: ".$elapsed.PHP_EOL;