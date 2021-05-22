<?php

function getFileRow($file) {
    $handle = fopen($file, 'r');

    if ($handle === false) {
        throw new Exception();
    }

    while (feof($handle) === false) {
        yield fgetcsv($handle);
    }

    fclose($handle);
}

$dataArray = [];

foreach (getFileRow('test.csv') as $row) {
    $dataArray[] = $row;
    echo memory_get_usage() . PHP_EOL;
}
