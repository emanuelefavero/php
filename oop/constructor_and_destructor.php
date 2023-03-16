<?php
// * constructor - is called when an object is created
class Car {
  public $name;
  public $year;
  public function __construct($name, $year) {
    $this->name = $name;
    $this->year = $year;
  }
}

$car = new Car('BMW', 2015);
echo $car->name . ' ' . $car->year;

// * destructor - is called when an object is destroyed
class Color {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function __destruct() {
    echo 'The color ' . $this->name . ' has been removed';
  }
}

$color = new Color('red'); // the object is destroyed after being created
?>
