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
      ?>
    </body>
</html>
