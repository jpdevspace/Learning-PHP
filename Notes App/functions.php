<?php
// dd => Dump & Die
function dd($val)
{
  echo '<pre>';
  var_dump($val);
  echo '</pre>';

  die();
}

function isUrl($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
  if (!$condition) {
    abortReq($status);
  }
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes); // extracts the key => value pairs from the array as $key = value; vars

  require base_path("views/" . $path);
}
