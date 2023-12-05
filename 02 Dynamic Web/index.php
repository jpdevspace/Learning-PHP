<?php

require('functions.php');
// require('Database.php');
// require('Response.php');
// require('router.php');

// Connect to our MySQL DB


class Person 
{
  public $name;
  public $age;

  public function breathe()
  {
    echo $this->name . ' is breathing';
  }
}

$person = new Person();

$person->name ='John Doe';
$person->age = 37;
$person->breathe(); // John Doe is breathing