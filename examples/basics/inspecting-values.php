<?php

$name = 'Alice';
$age = 30;
$price = 19.5;
$isLearning = true;
$missing = null;

// var_dump() mostra tipo e valore, anche quando echo non è sufficiente.
var_dump($name, $age, $price, $isLearning, $missing);

// Questi due valori sembrano uguali con echo, ma hanno tipi diversi.
var_dump('30', 30);
