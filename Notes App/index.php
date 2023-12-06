<?php

require("functions.php");
require("Database.php");
// require("Response.php");
 require("router.php");


/*
|--------------------------------------------------------------------------
| PDO::FETCH_ASSOC
|--------------------------------------------------------------------------
| Passing PDO::FETCH_ASSOC as an arg to the fetch func
| determines what type of data will be returned
| i.e. returns an associative array
| The :: gives you access to a constant that was defined on a class

*/

//$id = $_GET["id"];
//$query = "SELECT * FROM posts WHERE id = ?";
//$post = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);





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