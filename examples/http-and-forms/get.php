<?php

// Eseguire via HTTP: la risposta è testo semplice, non HTML.
header('Content-Type: text/plain; charset=UTF-8');

// TIP: $_GET legge i parametri della query string nell'URL.
$name = $_GET['name'] ?? 'visitatore';

echo "Ciao {$name}!", PHP_EOL;
echo 'Metodo: ', $_SERVER['REQUEST_METHOD'], PHP_EOL;
echo 'Parametri ricevuti:', PHP_EOL;
var_dump($_GET);
