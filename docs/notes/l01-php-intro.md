# L01 — PHP Intro

Versione di riferimento: PHP 8.5.9.

## PHP, server e browser

PHP è un linguaggio general purpose usato spesso sul backend, ma eseguibile anche da terminale.

Nel caso web:

1. Il browser invia una richiesta HTTP.
2. Il server fa eseguire il codice PHP all'interprete.
3. Il risultato diventa il corpo della risposta: HTML, testo, JSON o altro.
4. Il browser riceve il risultato, non il sorgente PHP, se il server è configurato correttamente.

PHP può generare HTML, ma non è obbligatorio. Aprire un file PHP direttamente dal filesystem nel browser non equivale a eseguirlo sul server.

Il codice PHP può reagire a una nuova richiesta, per esempio quella inviata da un form. Per modificare una pagina già caricata senza navigazione si usa normalmente JavaScript nel browser, eventualmente con richieste al backend. JavaScript può anche essere eseguito sul server: la distinzione client/server riguarda dove gira il codice.

Da terminale il risultato va invece all'output del processo:

```bash
```

Per eseguire gli esempi bastano PHP CLI e il server locale integrato.

## Sintassi, variabili e output

Un file di solo PHP comincia con `<?php` e omette il tag finale `?>`. Le istruzioni terminano con `;`.

```php
<?php

$name = 'Alice';
echo $name, PHP_EOL;
```

- Le variabili iniziano con `$` e i loro nomi distinguono maiuscole e minuscole.
- L'assegnazione usa `=`; non serve una dichiarazione come `let` o `const` di JavaScript.
- Leggere una variabile prima di averle assegnato un valore produce un warning.
- `echo` emette output e non aggiunge automaticamente un separatore o un ritorno a capo.
- `PHP_EOL` è la sequenza di fine riga della piattaforma. Nel terminale separa le righe; in HTML un ritorno a capo non equivale a `<br>`.

Esempio: [variables.php](../../examples/basics/variables.php).

## Stringhe

```php
$name = 'Alice';

echo "Ciao {$name}!", PHP_EOL;       // Ciao Alice!
echo 'Ciao $name!', PHP_EOL;         // Ciao $name!
echo 'Ciao ' . $name . '!', PHP_EOL; // Ciao Alice!
```

Le virgolette doppie permettono l'interpolazione e sequenze come `\n`. Gli apici singoli mantengono letterali le variabili e `\n` (con eccezioni per l'escape di apice e backslash).

Il punto `.` concatena stringhe; `+` serve alle operazioni numeriche. Negli esempi si usano le parentesi graffe per rendere chiaro il confine del nome interpolato: `"{$name}"`.

Esempio: [strings.php](../../examples/basics/strings.php).

## Tipi e ispezione con var_dump()

Per iniziare riconosci `string`, `int`, `float`, `bool` e `null`. PHP ha anche array e oggetti, approfonditi nelle lezioni successive.

```php
var_dump('30', 30);
```

Il risultato distingue una stringa da un intero:

```text
string(2) "30"
int(30)
```

`var_dump()` emette direttamente tipo e valore; per le stringhe indica la lunghezza in byte. Non serve scrivere `echo var_dump(...)`. `echo` non è adatto a ispezionare un array come `$_GET`.

Esempio: [inspecting-values.php](../../examples/basics/inspecting-values.php).

Gli errori PHP si diagnosticano sul server o nel terminale, non nella console JavaScript del browser. La loro visualizzazione dipende dalla configurazione; un warning non interrompe necessariamente lo script, un errore fatale sì.

## Parametri GET

Nell'URL `http://localhost:4000/get.php?name=Alice`, `name=Alice` è la query string. Più parametri si separano con `&`.

PHP espone i parametri nell'array superglobale `$_GET`:

```php
$name = $_GET['name'] ?? 'visitatore';
```

`??` usa il valore a destra se la chiave manca o contiene `null`, evitando di leggere direttamente una chiave assente. Una stringa vuota (`?name=`) resta vuota: non viene sostituita dal valore di default.

Le superglobali sono disponibili anche dentro le funzioni. `$_GET` è un array associativo: ogni nome di parametro è una chiave con il relativo valore. Contiene i parametri della query string, anche quando la richiesta usa un metodo diverso da GET.

I normali valori della query arrivano come stringhe: `?age=30` non produce automaticamente un intero.

Esempio: [get.php](../../examples/http-and-forms/get.php). Restituisce `text/plain`, mostra il saluto, il metodo HTTP e `var_dump($_GET)`. `$_SERVER['REQUEST_METHOD']` contiene il metodo HTTP, per esempio `GET`.

## GET in una pagina HTML

Un parametro può cambiare il contenuto di una pagina anche senza un form. Aprendo `greeting.php?name=Alice`, PHP legge il nome e lo inserisce nel saluto HTML:

```php
<?php

$name = $_GET['name'] ?? 'visitatore';

$safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<h1>Ciao <?= $safeName ?>!</h1>
```

Con `?name=Alice` il browser riceve `<h1>Ciao Alice!</h1>`; senza il parametro riceve `<h1>Ciao visitatore!</h1>`. L'escaping è spiegato qui sotto. La [pagina completa](../../examples/http-and-forms/greeting.php) include anche la struttura HTML del documento.

## Form GET e risposta HTML

Un form evita di costruire manualmente la query string:

```html
<form action="greeting.php" method="get">
    <label for="name">Nome</label>
    <input id="name" name="name" type="text">
    <button type="submit">Salutami</button>
</form>
```

- `action` sceglie la destinazione della richiesta.
- `method="get"` invia i valori nella query string.
- `name` determina il nome del parametro; `id` collega il campo alla sua etichetta.

Il browser richiede, per esempio, `greeting.php?name=Alice`. Il server legge il parametro e genera una nuova risposta. I valori sono visibili nell'URL: GET non è adatto all'invio di password.

Quando inserisci testo ricevuto dall'utente nell'HTML, usa l'escaping:

```php
$safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
```

In questo modo `<script>` viene visualizzato come testo invece di diventare un tag. Questo passaggio riguarda l'inserimento in HTML e non converte il parametro in un dato attendibile. La risposta di testo semplice di `get.php` non richiede escaping HTML.

Nel template `<?= $safeName ?>` è la forma breve di `<?php echo $safeName; ?>`. Qui la chiusura del blocco PHP serve a proseguire con HTML; la convenzione di omettere `?>` finale riguarda i file di solo PHP.

Esempi: [form](../../examples/http-and-forms/index.php) e [risposta](../../examples/http-and-forms/greeting.php).

## Xdebug

`var_dump()` fa già parte di PHP. Xdebug è un'estensione separata: la modalità `develop` arricchisce gli strumenti di sviluppo, incluso `var_dump()`; la modalità `debug` permette l'esecuzione passo passo con un client di debug compatibile.

Per usare Xdebug occorre installare e configurare l'estensione. Gli esempi con `var_dump()` funzionano anche senza Xdebug.

Nel browser il dump di un array può essere restituito come `text/plain`, come in `get.php`. Un blocco `<pre>` mantiene la formattazione in una pagina HTML, ma non esegue automaticamente l'escaping di eventuali dati ricevuti.

## Esecuzione

Dalla radice della repo:

```bash
php examples/basics/variables.php
php examples/basics/strings.php
php examples/basics/inspecting-values.php
```

Per gli esempi HTTP, sempre dalla radice:

```bash
php -S localhost:4000 -t examples/http-and-forms
```

Apri:

- [GET in HTML](http://localhost:4000/greeting.php?name=Alice): cambia il nome nell'URL e osserva il saluto.
- [Form](http://localhost:4000/): invia un nome e osserva l'URL e il saluto.
- [GET con nome](http://localhost:4000/get.php?name=Alice): osserva parametro e metodo.
- [GET senza nome](http://localhost:4000/get.php): usa il valore di default.

Prova anche un nome con accenti, un campo vuoto e il testo `<b>Alice</b>`: nella risposta HTML quest'ultimo deve apparire come testo.

Ferma il server con `Ctrl+C`.

## Riferimenti tecnici

- [PHP: cosa può fare](https://www.php.net/manual/en/intro-whatcando.php)
- [Sintassi e tag finali](https://www.php.net/manual/en/language.basic-syntax.instruction-separation.php)
- [Stringhe](https://www.php.net/manual/en/language.types.string.php)
- [Variabili esterne e form](https://www.php.net/manual/en/language.variables.external.php)
- [$_GET](https://www.php.net/manual/en/reserved.variables.get.php)
- [var_dump()](https://www.php.net/manual/en/function.var-dump.php)
- [htmlspecialchars()](https://www.php.net/manual/en/function.htmlspecialchars.php)
- [Xdebug: strumenti di sviluppo](https://xdebug.org/docs/develop) e [debug passo passo](https://xdebug.org/docs/step_debug)
