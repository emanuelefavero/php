<?php
// static - defines static properties and methods. Static properties and methods can be accessed without creating an instance of the class.

class person {
  static $name = "John";
  static function sayHello() {

    // self is used to access static properties and methods
    echo "Hello " . self::$name . "\n";
  }
}

person::sayHello(); // Hello John

// TIP: static are similar to javascript objects literals
?>
