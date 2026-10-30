<?php
class Person {
  public $name;
  public $age;

  function sayHi() {
    if ($this->name) {
      echo "Hi, my name is $this->name <br/>";
    } else {
      echo "Hi, I don't have a name <br/>";
    }
  }
}

$person1 = new Person();
$person1->name = 'John';
$person1->age = 40;
$person1->sayHi();

echo "I am $person1->age years old";

print_r($person1);
?>
