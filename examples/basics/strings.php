<?php

// Tre modi di scrivere un saluto: interpolazione, testo letterale e concatenazione.
$name = 'Emanuele';

echo "Ciao {$name}!", PHP_EOL;
echo 'Ciao $name!', PHP_EOL; // Gli apici singoli non interpolano variabili.
echo 'Ciao ' . $name . '!', PHP_EOL;

echo "Prima riga\nSeconda riga", PHP_EOL;
echo 'Prima riga\nSeconda riga', PHP_EOL; // Qui \n resta testo.

// Il punto concatena; + esegue una somma.
echo '1' . '2', PHP_EOL; // 12
echo 1 + 2, PHP_EOL; // 3
