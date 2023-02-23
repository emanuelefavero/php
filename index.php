<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PHP</title>
    </head>
    <body>
      <?php
        // PHP Test - Serve this file (the file called index.php will be served by default):
        // php -S localhost:4000 -t .

        // * Variables
        $name = 'John';

        // * Output
        echo "Hello $name \n"; // Hello John
        echo 'Hello $name'; // Hello $name - single quotes don't parse variables

        echo "\n"; // New line

        // * Constants
        define('PORT', 4000); // define(name, value, true) - true means case insensitive PORT == port
        echo PORT; // $ is not needed to access constants

        // * Data Types
        // String
        $string = 'Hello World';

        // Integer
        $integer = 1;

        // Float
        $float = 1.2;

        // Boolean
        $boolean = true;

        // Array
        $array = [1, 2, 3];
        echo $array[0]; // 1

        // Object
        $object = new stdClass();
        $object->name = 'James';
        $object->age = 34;
        echo $object->name; // James

        // Null
        $null = null;
        echo $null; // nothing is printed

        // * Conversion and concatenation
        // Convert String to Integer
        echo (int)'1' + 2; // 3
        echo '1' + 2; // 3 - still works

        // Convert Integer to String
        echo strval(1) + strval(2); // 3 - still 3 since there is a + sign

        // Concatenate String of Integers
        echo 1 . 2; // '12'

        // * Scope (Global vs Local)
        // Variables are LOCAL by default
        // You CANNOT access a variable outside of a function
        $my_name = 'Ema';
        function sayName() {
          // echo $my_name; // ! ERROR Undefined
          global $my_name; // try to avoid global when possible
          echo $my_name; // Ema
        }
        sayName();

        // * Variable Variables
        // You can use a variable value as a variable name and access it with $$ and so on
        $fruit = 'banana';
        $banana = 'yellow';
        echo $$fruit; // yellow - variable variable

        // ----------------------------
        // add operators, arrays, control structures, functions HERE...
        // ----------------------------

        // * A superglobal is a predefined variable that is always accessible
        // * $_SERVER is an array superglobal that contains information about headers, paths, and script locations

        // Return relative path of current script
        echo ltrim($_SERVER['SCRIPT_NAME'], '/');
        echo "<br>"; // index.php
        echo $_SERVER['SCRIPT_NAME']; // /index.php
        echo "<br>";

        // Returns the Host header from the current request
        echo $_SERVER['HTTP_HOST'];
        echo "<br>"; // localhost:4000

        // Returns the filename of the currently executing script
        echo $_SERVER['PHP_SELF'];
        echo "<br>"; // /index.php

        // Returns the IP address of the host server
        // echo $_SERVER['SERVER_ADDR']; // will raise notice if you are using localhost
        // echo "<br>"; //

        // Returns the name of the host server
        echo $_SERVER['SERVER_NAME'];
        echo "<br>"; // localhost

        // Returns the IP address from where the user is viewing the current page
        echo $_SERVER['REMOTE_ADDR'];
        echo "<br>"; //

        // Returns the Host name from where the user is viewing the current page
        // echo $_SERVER['REMOTE_HOST']; // will raise notice if you are using localhost
        // echo "<br>"; //

        // Returns the port being used on the user's machine to communicate with the web server
        echo $_SERVER['REMOTE_PORT'];
        echo "<br>"; // 61357

        // Returns the absolute pathname of the currently executing script
        echo $_SERVER['SCRIPT_FILENAME'];
        echo "<br>"; // /Users/ef/Desktop/php-test/index.php

        // Returns the port being used on the user's machine to communicate with the web server
        echo $_SERVER['SERVER_PORT'];
        echo "<br>"; // 4000

        // Returns the protocol and version of the request
        echo $_SERVER['SERVER_PROTOCOL'];
        echo "<br>"; // HTTP/1.1

        // Returns the php software version being used on the server
        echo $_SERVER['SERVER_SOFTWARE'];
        echo "<br>"; // PHP 7.4.3 Development Server

        // Returns the request method used to access the page
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>"; // GET

        // Returns the timestamp of the start of the request
        echo $_SERVER['REQUEST_TIME'];
        echo "<br>"; // 1597140000
      ?>
    </body>
</html>
