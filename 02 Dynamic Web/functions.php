<?php 
// dd => Dump & Die
function dd($val) {
  echo '<pre>';
  var_dump($val);
  echo '</pre>';
  
  die();
}

function isUrl($value) {
  return $_SERVER['REQUEST_URI'] === $value;
}