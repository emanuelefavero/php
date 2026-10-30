<?php

function println(mixed $value): void {
    if (is_array($value) || is_object($value)) {
        echo json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), PHP_EOL;
        return;
    }

    var_dump($value);
}
