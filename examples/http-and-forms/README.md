# HTTP e form — L01

Dalla radice della repo:

```bash
php -S localhost:4000 -t examples/http-and-forms
```

- `http://localhost:4000/greeting.php?name=Alice`: pagina HTML con un saluto basato sul parametro nell’URL.
- `http://localhost:4000/`: collegamento al saluto e form GET che invia `name` a `greeting.php` e mostra il risultato in HTML.
- `http://localhost:4000/get.php?name=Alice`: risposta di testo semplice con saluto, metodo HTTP e parametri.

Se `name` manca viene usato `visitatore`; se è vuoto resta vuoto. Nella pagina HTML il nome è sottoposto a escaping.

Questi esempi richiedono il server HTTP. Interrompilo con `Ctrl+C`.

Spiegazioni e prove manuali: [appunti L01](../../docs/notes/l01-php-intro.md).
