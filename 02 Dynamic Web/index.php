<?php

require('functions.php');
// require('Database.php');
// require('Response.php');
// require('router.php');

// Connect to our MySQL DB
$dsn = 'mysql:host=localhost;port=3306;dbname=laracast_myapp;user=root;charset=utf8mb4';

$pdo = new PDO($dsn);


$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();

// Passing PDO::FETCH_ASSOC as arg determines the type of data
// that the fetch will return
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post)
{
  echo '<li>' . $post['title'] . '</li>';
}




// THIS EXAMPLE HAS NOTHING TO DO WITH THE APP, IT'S JUST 
// NOTES, THIS IS HOW YOU CREATE A CLASS, INSTANTIATE IT AND
// CALL ITS FIELDS AND METHODS WITH -> 
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
// $person->breathe(); // John Doe is breathing