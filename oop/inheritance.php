<?php
class Product {
  public $name;
  public $price;
  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  // METHODS HERE
}

class ElectronicProduct extends Product {
  public $warranty;
  public function __construct($name, $price, $warranty) {
    parent::__construct($name, $price);
    $this->warranty = $warranty;
  }
}

class PhysicalProduct extends Product {
}

$electronicProduct = new ElectronicProduct('iPhone', 999, 24);
$physicalProduct = new PhysicalProduct('T-shirt', 19);

echo $electronicProduct->name . "\n";
?>
