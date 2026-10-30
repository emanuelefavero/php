<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
    <h1>Parametri GET e HTML</h1>
    <h2>Passare il nome nell'URL</h2>
    <p><a href="greeting.php?name=Alice">Apri un saluto per Alice</a></p>
    <p>Prova a cambiare il valore di name nell'URL: PHP genererà un nuovo saluto.</p>
    <h2>Passare il nome con un form</h2>
    <form action="greeting.php" method="get">
        <label for="name">Nome</label>
        <input id="name" name="name" type="text">
        <button type="submit">Salutami</button>
    </form>
    <p>Il nome verrà inviato nella query string dell'URL.</p>
</body>
</html>
