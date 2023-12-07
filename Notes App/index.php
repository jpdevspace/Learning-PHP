<?php

require("functions.php");
require("Database.php");
require("Response.php");
require("router.php");


/*
|--------------------------------------------------------------------------
| CLASS EXAMPLE
|--------------------------------------------------------------------------
| This example has nothing to do with the app
| but it shows how to create a class, fields and methods
| and how to call them with ->
*/
class Person
{
  public $name;
  public $age;

  public function breathe()
  {
    echo $this->name . " is breathing";
  }
}

$person = new Person();

$person->name = "John Doe";
$person->age = 37;
// $person->breathe(); // John Doe is breathing