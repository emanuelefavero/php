# Roadmap

## Obiettivo

Trasformare questa repo in un laboratorio personale per studiare PHP: appunti sintetici, esempi eseguibili, esercizi e uno spazio per sperimentare. Il nome `php` rimane adatto; la cheatsheet sarà una parte della repo, costruita progressivamente durante lo studio.

Il percorso segue `docs/Lessons.md`: prima le basi PHP (L01–L05), poi Laravel (L06–L17). Non preparare in anticipo tutti i contenuti: completare una lezione alla volta.

## Decisioni

- Usare PHP 8.5.9 come riferimento iniziale, versione confermata anche nell'ambiente locale. Ricontrollare la versione quando si aggiorna l'ambiente.
- Il codice vecchio documenta esperimenti fatti con meno esperienza e potenzialmente con versioni precedenti di PHP. Non deve imporre stile o sintassi al codice futuro.
- Per il nuovo codice scegliere sintassi attuale, leggibile e appropriata all'argomento. Verificare nella documentazione le differenze rispetto ai materiali del corso; non introdurre funzionalità nuove soltanto per usarle.
- Nei file di solo PHP aprire con `<?php` e omettere il tag finale `?>`. Usare `echo`, `PHP_EOL` e gli strumenti di ispezione quando basta osservare l'output.
- Usare HTML quando serve all'esempio: form, pagine e interazione nel browser. Gli esempi HTTP non devono essere adattati artificialmente all'esecuzione da terminale.
- Conservare i PDF originali in `.local/`, esclusa da Git. Pubblicare solo appunti rielaborati con parole proprie, senza copiare integralmente i materiali ricevuti.

## Struttura di destinazione

```text
php/
├── README.md
├── roadmap.md
├── index.php
├── docs/
│   ├── Lessons.md
│   ├── Exercises.md
│   └── notes/
├── examples/
│   ├── basics/
│   ├── functions-and-includes/
│   ├── http-and-forms/
│   ├── json-and-files/
│   └── oop/
├── exercises/
├── archive/
│   └── initial-experiments/
└── .local/
    ├── notes/
    └── slides/
```

Creare le cartelle quando hanno un contenuto reale. Organizzare appunti ed esempi per argomento; usare il programma come indice del percorso, con collegamenti ai contenuti corrispondenti.

| Posizione | Scopo |
| --- | --- |
| `README.md` | Scopo, orientamento nella repo e comandi essenziali |
| `docs/Lessons.md` | Programma del corso |
| `docs/Exercises.md` | Indice degli esercizi, soluzioni proprie e riferimenti esterni |
| `docs/notes/` | Spiegazioni brevi e sintassi da consultare |
| `examples/` | Piccoli esempi verificati, focalizzati su un concetto |
| `exercises/` | Consegne e implementazioni personali |
| `index.php` | Playground per prove libere e temporanee |
| `archive/initial-experiments/` | Materiale precedente al nuovo percorso, da rivedere |
| `.local/` | Materiali originali privati |

## Esecuzione e playground

`index.php` è il playground principale: contiene le prove libere del momento e si esegue con `php index.php`.

Gli esempi delle lezioni si eseguono direttamente dal proprio percorso, per esempio `php examples/basics/variables.php`. Gli esempi HTTP si avviano con la propria cartella come document root, per esempio `php -S localhost:4000 -t examples/http-and-forms`.

Ogni esempio mantiene il proprio punto d'ingresso. Non servono importazioni delle lezioni nel playground, menu o sistemi di routing.

## Fase 1 — Riordinare la base

- [x] Spostare il vecchio `index.php` e le cartelle `oop/`, `working-with-files/`, `import/`, `print/` e `PHP_EOL/` in `archive/initial-experiments/`, conservando struttura e file di dati.
- [x] Aggiungere una breve nota nell'archivio: esempi storici, non ancora verificati per il nuovo percorso. Non riscriverli durante lo spostamento.
- [x] Usare il nuovo `index.php` come playground minimale e avviare gli esempi direttamente.
- [x] Aggiornare il README con lo scopo della repo, la struttura e la distinzione tra esecuzione da terminale e via HTTP.
- [x] Verificare che `.local/` rimanga ignorata e che nessun materiale originale sia tracciato.
- [x] Confermare che `docs/Exercises.md` contenga i tre riferimenti distinti: Hotels, Password Generator e Dischi JSON. Il quarto collegamento iniziale era un duplicato di Hotels.

Completamento: vecchio materiale conservato, playground funzionante e istruzioni sufficienti per riprendere lo studio. Nessuna conversione dei PDF in questa fase.

## Fase 2 — Preparare e studiare L01

- [x] Leggere note e slide disponibili per L01, segnalando eventuali materiali mancanti senza ricostruirli come se fossero originali.
- [x] Scrivere appunti sintetici in `docs/notes/`, con esempi e spiegazioni proprie.
- [x] Recuperare dall'archivio solo gli esempi utili: variabili, output, stringhe e tipi; separare scope e informazioni HTTP secondo il programma.
- [x] Correggere commenti e sintassi durante il recupero; conservare nell'archivio la versione storica.
- [x] Aggiungere esempi mirati per gli argomenti di L01 non coperti dal vecchio codice.
- [x] Collegare gli appunti agli esempi e documentare come eseguirli.

Completamento: materiale L01 consultabile ed esempi eseguiti nel contesto appropriato. Questa fase serve anche a calibrare quanto dettaglio mantenere nelle lezioni successive.

## Fase 3 — Proseguire con L02–L05

Per ciascuna lezione:

1. Rivedere il programma e i materiali disponibili.
2. Preparare appunti essenziali, evitando di duplicare le stesse spiegazioni.
3. Scrivere o recuperare piccoli esempi verificati.
4. Affrontare l'esercizio con un tentativo personale prima di confrontare le soluzioni disponibili.
5. Annotare dubbi e correggere gli appunti dopo la pratica.

- [ ] L02: condizionali, operatori, array e cicli; esercizio Hotels.
- [ ] L03: funzioni, scope, include/require e sessioni; esercizio Password Generator.
- [ ] L04: JSON e file; esercizio Dischi JSON.
- [ ] L05: OOP; recuperare gli esempi pertinenti dall'archivio e svolgere l'esercizio Movie del programma.
- [ ] Fare il checkpoint sulle basi prima di passare a Laravel.

Ogni esercizio avrà una breve consegna e le istruzioni necessarie. Distinguere le soluzioni proprie dai riferimenti della compagna; se una consegna viene ricostruita, dichiararlo. Non presumere disponibili soluzioni oltre ai tre esercizi attuali.

Per gli esempi che scrivono file, distinguere dati iniziali e dati generati; documentare gli effetti e il ripristino. Non modificare accidentalmente i dati dell'archivio.

## Fase 4 — Affrontare Laravel quando sarà il momento

- [ ] Verificare versioni, requisiti e strumenti rispetto al materiale del corso e alla versione PHP adottata.
- [ ] Decidere dove ospitare i progetti in base alla loro dimensione: piccoli esperimenti qui, eventuali progetti completi in repository dedicate e collegate dall'indice.
- [ ] Mantenere un unico progetto quando più lezioni lo sviluppano progressivamente, evitando copie per ogni lezione.
- [ ] Proseguire da L06 a L17 con appunti, pratica e checkpoint previsti dal programma.

Non installare ora Laravel e non preparare cartelle o configurazioni per tutte le lezioni future.

## Verifica e manutenzione

- Eseguire pochi controlli mirati dopo ogni modifica: sintassi dei file interessati, output da terminale o comportamento nel browser secondo l'esempio.
- Verificare form, sessioni e richieste nel loro contesto HTTP; un controllo di sintassi non basta a confermarne il comportamento.
- Aggiornare README e collegamenti quando cambia la struttura.
- Spuntare una fase soltanto dopo averne verificato i risultati; distinguere riordino della repo e argomenti effettivamente studiati.
- Aggiungere strumenti, automazioni o test solo quando risolvono una necessità concreta.

La Fase 1 è completata: i 21 file originali sono stati archiviati senza variazioni di contenuto; il playground principale supera il controllo di sintassi e viene eseguito correttamente da terminale. Gli otto PDF in `.local/` sono ignorati e non tracciati; l’indice contiene i tre esercizi distinti.

La Fase 2 è completata come preparazione del materiale: [appunti L01](docs/notes/l01-php-intro.md), tre esempi CLI e tre file per gli esempi HTTP. Le slide L01 non sono disponibili; gli appunti della compagna sono stati rielaborati e verificati sulla documentazione ufficiale. Scope, costanti e dettagli del server non pertinenti a L01 restano nell'archivio per le lezioni successive.

Verifiche effettuate: sintassi di tutti i nuovi file PHP, output dei tre esempi CLI e del playground, risposte HTTP (default, vuoto, Unicode ed escaping), invio reale del form nel browser. Xdebug non è caricato: il suo ruolo è documentato, ma installazione e debug passo passo non sono stati eseguiti. I PDF originali sono invariati.

L01 è pronta da studiare: il completamento della preparazione non certifica l'apprendimento. Prima di preparare L02, usare gli esempi e chiarire eventuali dubbi sulla prima lezione.

### Convenzioni per i materiali didattici

- Le note delle lezioni contengono solo spiegazioni, cheatsheet, esempi e istruzioni utili al lettore. Provenienza dei materiali, disponibilità delle slide, informazioni sulla compagna e file in `.local/` restano nella roadmap.
- Gli appunti della compagna sono un supporto da verificare; le slide sono il riferimento didattico della scuola. Per L01 sono disponibili gli appunti, ma manca la slide corrispondente.
- I commenti spiegano concretamente cosa fa il codice e perché, con esempi di input e risultato quando aiutano.
- Gli argomenti legati al web, come `$_GET`, includono esempi HTML oltre alle eventuali risposte di testo semplice. La pagina HTTP L01 collega direttamente il saluto HTML tramite query string e tramite form.

- Costruire lezioni ed esempi intorno agli argomenti da imparare. Verificare e correggere eventuali imprecisioni delle fonti senza citarle o trasformarle in digressioni didattiche. L01 si concentra su parametri GET semplici, form e output HTML; la validazione di input complessi resta per un approfondimento successivo.
