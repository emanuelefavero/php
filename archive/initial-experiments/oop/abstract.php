<?php
// abstract - abstract classes are classes that cannot be instantiated. 
// difference from interfaces: interfaces specifies just the methods names. - abstract classes can specify both methods and properties names

abstract class Fruit {
  private $color;

  abstract public function eat();

  public function setColor($color) {
    $this->color = $color;
  }
}

class Mango extends Fruit {
  public function eat() {
    echo "The mango is delicious!";
  }
}

$mango = new Mango();
$mango->setColor("yellow");
$mango->eat();

// $fruit = new Fruit(); // error: cannot instantiate abstract class Fruit
?>
