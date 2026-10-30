<?php

echo "PHP playground \n";
//=/

$users = [
  [
    "name" => "john",
    "age" => 30
  ],
  [
    "name" => "jane",
    "age" => 24
  ]
];

foreach ($users as $user) {
  echo "{$user['name']} ha {$user['age']} anni", PHP_EOL;
}
