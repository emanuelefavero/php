# PHP

Personal [PHP](https://www.php.net/) learning repository with runnable examples, exercises, concise notes, and a playground for experiments.

The study path follows [the course programme](docs/Lessons.md), starting with PHP fundamentals and continuing with Laravel. See the [roadmap](roadmap.md) for the planned steps and the [exercise references](docs/Exercises.md) for the available external solutions.

## Structure

- `index.php`: playground for current experiments.
- `examples/basics/`: runnable PHP basics.
- `examples/http-and-forms/`: GET parameters and form examples.
- `docs/`: course programme, exercise references, and [L01 notes](docs/notes/l01-php-intro.md).
- `archive/initial-experiments/`: original code and data, preserved for gradual review.
- `.local/`: private source materials, ignored by Git.

As study progresses, examples and notes will grow by topic; `exercises/` will hold personal solutions.

## Run locally

Reference version: **PHP 8.5.9**.

Run each script directly from the repository root:

```bash
php examples/basics/variables.php
php examples/basics/strings.php
php examples/basics/inspecting-values.php
```

Use the root `index.php` for your own experiments:

```bash
php index.php
```

PHP-only files omit the closing `?>` tag. Examples that only print output do not need HTML.

### HTTP examples

Forms, sessions, and request examples run through a local web server. From the repository root, start the L01 examples with:

```bash
php -S localhost:4000 -t examples/http-and-forms
```

Open `http://localhost:4000/` in the browser. The server serves the example directory directly, so its links and form destinations resolve correctly. Stop it with `Ctrl+C`.

For another HTTP example, set `-t` to its entry-point directory. See the [L01 HTTP instructions](examples/http-and-forms/README.md) for the available pages.

## Resources

- [PHP Manual](https://www.php.net/manual/en/index.php)
- [PHP W3Schools](https://www.w3schools.com/php/)
- [PHP SoloLearn](https://www.sololearn.com/learning/1059)
