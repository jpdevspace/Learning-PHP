<?php

$books = [
  [
    'name' => 'Do Androids Dream Of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => 1968,
    'purchaseUrl' => 'http://www.example.com'
  ],
  [
    'name' => 'Project Hail Mary',
    'author' => 'Andy Weir',
    'releaseYear' => 2021,
    'purchaseUrl' => 'http://www.example.com'
  ],
  [
    'name' => 'The Martian',
    'author' => 'Andy Weir',
    'releaseYear' => 2011,
    'purchaseUrl' => 'http://www.example.com'
  ],
];

$filteredBooks = array_filter($books, function ($book) {
  return $book['releaseYear'] >= 2000;
});

// SUMMARY

// Variables
$name = 'Laracasts';
$cost = 15;

// Associative Arrays
$business = [
  'name' => 'Laracasts',
  'cost' => 15,
  'categories' => ['Testing', 'PHP', 'JS']
];

// If statement
if ($business['cost'] > 99) {
  echo 'not interested';
}

// Loop
foreach ($business['categories'] as $category) {
  echo $category . '<br>';
}

//  Functions
function register($user)
{
  // Do something here
}

require 'index.view.php';

/*
|--------------------------------------------------------------------------
| PHP FUNDAMENTALS
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Associative Arrays
|--------------------------------------------------------------------------
| These are 3 ways to create associative arrays
| array aa, ba and ca
*/

// Option 1
$aa['key1'] = 'Value1';
$aa['key2'] = 'Value2';

// Option 2
$ba = array('key1' => 'Value1', 'key2' => 'Value2');

// Option 3 (available on PHP version > 5.4)
$ca = ['key1' => 'Value1', 'key2' => 'Value2'];

/*
|--------------------------------------------------------------------------
| Indexed Arrays
|--------------------------------------------------------------------------
| These are 3 ways to create indexed arrays
| arrays ai, bi and ci
*/

// Option 1
$ai = array(); // Empty array
$ai[] = 'position 0'; // The empty [] appends 'position 0' to $ai
$ai[] = 'position 1'; // Appends 'position 1' to the end of $a1

// Option 2
$bi = array('position 0', 'position1');

// Option 3 (available on PHP version > 5.4)
$ci = ['position 0', 'position 1'];

/*
|--------------------------------------------------------------------------
| Iteration - Loops
|--------------------------------------------------------------------------
|
| Example 1 prints only the values in the "key => value" pairs
| of an associative array
|
|  "This is v: Value1"
|  "This is v: Value2"
|
| Example 2 prints both the keys and the values
|
|  "This is k: key1"
|  "This is q: Value1"
|  "This is k: key2"
|  "This is q: Value2"
|
*/

// Example 1

foreach ($ca as $v) {

  echo "This is k: $v";
  echo '<br />';
}

echo "--------------------------";

// Example 2
foreach ($ca as $k => $v) {

  echo "This is k: $k";
  echo '<br />';

  echo "This is q: $v";
  echo '<br />';
}
echo "--------------------------";
/*
|--------------------------------------------------------------------------
| Classes & OOP
|--------------------------------------------------------------------------
|
*/

class Person
{
  public $name;
  private $age;

  public function __construct($name = 'John Doe', $age = 0)
  {
    echo 'A new person is borned';
    $this->name = $name;
    $this->age = $age;
  }


  public function say_name()
  {
    echo 'My name is: ' . $this->name;
  }

  public function bday()
  {
    echo 'Woho, I am ' . $this->age + 1 . ' now!';
  }

  public function scream()
  {
    echo 'AAAAHHH!';
  }
}


$nobody = new Person();
echo '<br />';

echo $nobody->name;
echo '<br />';
// echo $nobody->age; // Fatal error: cannot access private property Person::$age

echo $nobody->say_name();
echo '<br />';

echo $nobody->bday();
echo '<br />';

echo $nobody->scream();
echo '<br />';

echo "--------------------------";

$jp = new Person('JP', 10);
echo '<br />';

echo $jp->name;
echo '<br />';
// echo $jp->age; // Fatal error: cannot access private property Person::$age

echo $jp->say_name();
echo '<br />';

echo $jp->bday();
echo '<br />';

echo $jp->scream();
echo '<br />';
