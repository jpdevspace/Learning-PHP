<?php

$books = [
  [
    'name'=> 'Do Androids Dream Of Electric Sheep',
    'author'=> 'Philip K. Dick',
    'releaseYear'=> 1968,
    'purchaseUrl'=> 'http://www.example.com'
  ],
  [
    'name'=> 'Project Hail Mary',
    'author'=> 'Andy Weir',
    'releaseYear'=> 2021,
    'purchaseUrl'=> 'http://www.example.com'
  ],
  [
    'name'=> 'The Martian',
    'author'=> 'Andy Weir',
    'releaseYear'=> 2011,
    'purchaseUrl'=> 'http://www.example.com'
  ],
];

$filteredBooks = array_filter($books, function($book) {
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
function register($user) {
  // Do something here
}

require 'index.view.php';