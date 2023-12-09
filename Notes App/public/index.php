<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "functions.php";

/*
|--------------------------------------------------------------------------
| spl_autoload_register()
|--------------------------------------------------------------------------
| This function tracks when a class is being instantiated with the new keyword
| finds the class definition and requires it, so you don't have to
| do that manually
*/
spl_autoload_register(function ($class) {
  require base_path("{$class}.php");
});

// the spl_autoload_register() function above does this
// require base_path("Database.php");
// require base_path("Response.php");

require base_path("router.php");

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