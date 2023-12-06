<?php

require("functions.php");
require("Database.php");
// require("Response.php");
// require("router.php");

$config = require("config.php");


$db = new Database($config);

/*
|--------------------------------------------------------------------------
| PDO::FETCH_ASSOC
|--------------------------------------------------------------------------
| Passing PDO::FETCH_ASSOC as an arg to the fetch func
| determines what type of data will be returned
| i.e. returns an associative array
| The :: gives you access to a constant that was defined on a class

*/

$post = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

dd($post["title"]);




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

$person->name ="John Doe";
$person->age = 37;
// $person->breathe(); // John Doe is breathing