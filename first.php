<?php

define('MEMORY_LIMIT_120M_IN_BYTES', 125829120);

$h = fopen("test.csv", "r");
$data = fgetcsv($h, 1000, ",");

while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
    /*if (memory_get_usage() >= MEMORY_LIMIT_120M_IN_BYTES) {
        echo "Memory limit will be probably exhausted. Script execution terminated" . PHP_EOL;
        break;
    }*/
    $dataArray[] = $data;
    echo memory_get_usage() . PHP_EOL;
}

fclose($h);
