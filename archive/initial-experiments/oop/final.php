<?php
// final - final classes cannot be inherited. Final methods cannot be overridden.

// ----------------------------------------
class Fruit {
  final function eat() {
    echo "The fruit is delicious! \n";
  }
}


class Kiwi extends Fruit {
  // ! ERROR - cannot override final method
  // function eat() {
  //   echo "The kiwi is delicious!";
  // }
}

$fruit = new Fruit();
$fruit->eat();
// ----------------------------------------
final class Drink {
  function drink() {
    echo "The drink is delicious! \n";
  }
}

// ! ERROR - cannot inherit from final class
// class Soda extends drink {
//   function drink() {
//     echo "The soda is delicious!";
//   }
// }

$drink = new Drink();
$drink->drink();

?>
