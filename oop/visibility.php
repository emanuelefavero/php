<?php 
// visibility
// public - accessible from everywhere
// protected - accessible from the class and its subclasses
// private - accessible only from the class
class Animal {
  public $name;
  protected $color;
  private $sound;

  public function __construct($name, $color, $sound) {
    $this->name = $name;
    $this->color = $color;
    $this->sound = $sound;
  }

  public function makeSound() {
    echo $this->sound;
  }
}

class Cat extends Animal {
  public function getColor() {
    echo $this->color; // protected, so it's accessible here

    // echo $this->sound; // error
  }
}

$cat = new Cat('Tom', 'white', "meow \n");
$cat->makeSound();

echo $cat->name; // public, so it's accessible here
// echo $cat->color; // error
?>
