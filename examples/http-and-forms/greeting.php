<?php

$name = $_GET['name'] ?? 'visitatore';

// Convertiamo i caratteri HTML del nome in testo: <b>Alice</b> non deve diventare un tag.
$safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto</title>
</head>
<body>
    <h1>Ciao <?= $safeName ?>!</h1>
    <a href="index.php">Torna al form</a>
</body>
</html>
