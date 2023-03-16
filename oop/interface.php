<?php
// interface - interfaces specify methods that "must" be defined in classes. It can help us avoid forgetting some methods definitions (especially when working in a team of devs).

interface Employee {
  public function isWorking();
}

class FullTimeEmployee implements Employee {
  public $working;

  public function isWorking() {
    if ($this->working) {
      echo "The employee is working";
    } else {
      echo "The employee is not working";
    }
  }
}

$fullTimeEmployee = new FullTimeEmployee();
$fullTimeEmployee->working = false;
$fullTimeEmployee->isWorking();
?>
